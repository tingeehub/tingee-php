<?php
namespace Tingee\Sdk;

use Tingee\Sdk\Client\TingeeClientGenerated;
use Tingee\Sdk\Client\TingeeClientCustom;
use Tingee\Sdk\Http\TingeeHttpClient;
use Tingee\Sdk\Signature\TingeeSigner;
use Tingee\Sdk\Signature\WebhookVerifyResult;

class TingeeClient
{
    use TingeeClientGenerated;
    use TingeeClientCustom;

    private string $secretKey;

    public function __construct(string $secretKey, string $clientId, string $environment = 'prod', int $timeout = 90, ?string $baseUrl = null)
    {
        $this->secretKey = $secretKey;
        $resolvedUrl = $environment === 'prod'
            ? 'https://open-api.tingee.vn'
            : 'https://uat-open-api.tingee.vn';

        $this->httpClient = new TingeeHttpClient($baseUrl ?? $resolvedUrl, $secretKey, $clientId, $timeout);
        $this->initGroups();
    }
    public function verifyWebhookSignature(string $signature, string $timestamp, array|string $body): WebhookVerifyResult
    {
        return TingeeSigner::verifyWebhookSignature($this->secretKey, $signature, $timestamp, $body);
    }
}
