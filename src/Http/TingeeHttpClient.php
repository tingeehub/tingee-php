<?php
namespace Tingee\Sdk\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use ReflectionClass;
use Tingee\Sdk\Signature\SignatureUtils;
use Tingee\Sdk\Types\TingeeApiResponse;

class TingeeHttpClient
{
    private Client $client;
    private string $secretKey;
    private string $clientId;

    public function __construct(string $baseUrl, string $secretKey, string $clientId, int $timeout = 30)
    {
        $this->secretKey = $secretKey;
        $this->clientId = $clientId;
        $this->client = new Client([
            'base_uri' => rtrim($baseUrl, '/') . '/',
            'timeout'  => $timeout,
        ]);
    }

    /**
     * @param string $returnType  Main class to hydrate data into (e.g. SomeDto::class or 'SomeDto[]')
     * @param string|null $itemType  For PagedResultDto: the class of each item in ->items (e.g. OpenApiGetShopPagedOuputDto::class)
     */
    public function request(string $method, string $path, mixed $body, array $query, string $returnType, ?string $itemType = null): mixed
    {
        $timestamp = SignatureUtils::formatTimestamp();
        $signature = SignatureUtils::generateSignature($this->secretKey, $timestamp, $body);

        $headers = [
            'Content-Type' => 'application/json',
            'Accept' => 'application/json',
            'X-CLIENT-ID' => $this->clientId,
            'X-REQUEST-TIMESTAMP' => $timestamp,
            'X-SIGNATURE' => $signature,
        ];

        $options = [
            'headers' => $headers,
            'query' => $query,
        ];

        if ($body !== null) {
            $options['json'] = $body;
        }

        try {
            $response = $this->client->request($method, ltrim($path, '/'), $options);
            $content = $response->getBody()->getContents();
            $statusCode = $response->getStatusCode();

            $data = json_decode($content, true);
            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new TingeeHttpException('Failed to parse response JSON: ' . json_last_error_msg(), $statusCode, $content);
            }

            // Standard Tingee envelope: { code, message, data? }
            if (isset($data['code']) && isset($data['message'])) {
                $apiResponse = new TingeeApiResponse($data['code'], $data['message']);

                if (isset($data['data'])) {
                    $mappedData = $this->mapData($data['data'], $returnType, $itemType);
                    $apiResponse->setData($mappedData);
                }

                return $apiResponse;
            }

            // Non-envelope response — wrap for consistency
            $apiResponse = new TingeeApiResponse('00', 'success');
            $apiResponse->setData($this->mapData($data, $returnType, $itemType));
            return $apiResponse;

        } catch (RequestException $e) {
            $response = $e->getResponse();
            $statusCode = $response ? $response->getStatusCode() : 0;
            $content = $response ? $response->getBody()->getContents() : null;
            throw new TingeeHttpException($e->getMessage(), $statusCode, $content, [], $e);
        }
    }

    private function mapData(mixed $data, string $returnType, ?string $itemType = null): mixed
    {
        if ($data === null) {
            return null;
        }

        // 'ClassName[]' — map each element
        if (str_ends_with($returnType, '[]')) {
            $itemClass = substr($returnType, 0, -2);
            if (is_array($data) && class_exists($itemClass)) {
                return array_map(fn($item) => $this->mapToObject($item, $itemClass), $data);
            }
            return $data;
        }

        if ($returnType === '' || $returnType === 'mixed' || $returnType === 'array') {
            return $data;
        }

        if (is_array($data) && class_exists($returnType)) {
            return $this->mapToObject($data, $returnType, $itemType);
        }

        return $data;
    }

    /**
     * Recursively hydrate an associative array into a typed PHP object.
     *
     * For each property on the target class:
     * - If the property has a PHPDoc "@var SomeClass[]" and the raw value is an array
     *   of arrays, each element is recursively hydrated into SomeClass.
     * - If $itemType is provided and the property is named 'items', the same logic
     *   applies using $itemType as the element class (useful for PagedResultDto<T>
     *   where T is not knowable at runtime from PHPDoc alone).
     */
    private function mapToObject(array $data, string $className, ?string $itemType = null): mixed
    {
        $obj = new $className();
        $ref = new ReflectionClass($className);

        foreach ($data as $key => $value) {
            if (!property_exists($obj, $key)) {
                continue;
            }

            // Determine element class for array properties
            $elementClass = null;

            // Explicit $itemType takes priority for 'items' (PagedResultDto generics)
            if ($key === 'items' && $itemType !== null && class_exists($itemType)) {
                $elementClass = $itemType;
            }

            // Fall back to PHPDoc @var annotation on the property
            if ($elementClass === null && $ref->hasProperty($key)) {
                $prop = $ref->getProperty($key);
                $docComment = $prop->getDocComment();
                if ($docComment !== false) {
                    // Match "@var SomeClass[]" (with optional |null)
                    if (preg_match('/@var\s+([\w\\\\]+)\[\]/', $docComment, $m)) {
                        $candidate = $m[1];
                        // Resolve unqualified class names relative to the DTO namespace
                        if (!class_exists($candidate)) {
                            $ns = $ref->getNamespaceName();
                            $candidate = $ns . '\\' . $candidate;
                        }
                        if (class_exists($candidate)) {
                            $elementClass = $candidate;
                        }
                    }
                }
            }

            // Hydrate array of objects
            if ($elementClass !== null && is_array($value) && array_is_list($value)) {
                $obj->{$key} = array_map(
                    fn($item) => is_array($item) ? $this->mapToObject($item, $elementClass) : $item,
                    $value
                );
                continue;
            }

            $obj->{$key} = $value;
        }

        return $obj;
    }
}

