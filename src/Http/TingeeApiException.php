<?php
namespace Tingee\Sdk\Http;

class TingeeApiException extends \Exception
{
    private string $apiCode;
    
    public function __construct(string $message, string $apiCode, ?\Throwable $previous = null)
    {
        parent::__construct($message, 0, $previous);
        $this->apiCode = $apiCode;
    }

    public function getApiCode(): string
    {
        return $this->apiCode;
    }
}
