<?php
namespace Tingee\Sdk\Http;

class TingeeHttpException extends \Exception
{
    private int $statusCode;
    private ?string $responseContent;
    private array $headers;

    public function __construct(
        string $message,
        int $statusCode = 0,
        ?string $responseContent = null,
        array $headers = [],
        ?\Throwable $previous = null
    ) {
        parent::__construct($message, $statusCode, $previous);
        $this->statusCode = $statusCode;
        $this->responseContent = $responseContent;
        $this->headers = $headers;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    public function getResponseContent(): ?string
    {
        return $this->responseContent;
    }

    public function getHeaders(): array
    {
        return $this->headers;
    }
}
