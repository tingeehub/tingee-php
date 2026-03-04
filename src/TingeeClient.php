<?php
namespace Tingee\Sdk;

use Tingee\Sdk\Client\TingeeClientGenerated;
use Tingee\Sdk\Client\TingeeClientCustomV1;
use Tingee\Sdk\Http\TingeeHttpClient;
use Tingee\Sdk\Signature\TingeeSigner;
use Tingee\Sdk\Signature\WebhookVerifyResult;

class TingeeClient
{
    use TingeeClientGenerated;
    use TingeeClientCustomV1;

    private string $secretKey;

    public function __construct(string $secretKey, string $clientId, string $environment = 'uat', int $timeout = 30)
    {
        $this->secretKey = $secretKey;
        $baseUrl = $environment === 'prod'
            ? 'https://open-api.tingee.vn'
            : 'https://uat-open-api.tingee.vn';

        $this->httpClient = new TingeeHttpClient($baseUrl, $secretKey, $clientId, $timeout);
        $this->initVersionNamespaces();
    }
    public function verifyWebhookSignature(string $signature, string $timestamp, array $body): WebhookVerifyResult
    {
        return TingeeSigner::verifyWebhookSignature($this->secretKey, $signature, $timestamp, $body);
    }
}
