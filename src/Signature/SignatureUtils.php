<?php
namespace Tingee\Sdk\Signature;

class SignatureUtils
{
    /**
     * Generate signature for Tingee API request.
     * Signature format: HMAC-SHA512(secretKey, timestamp:JSON.stringify(body))
     */
    public static function generateSignature(string $secretKey, string $timestamp, mixed $body): string
    {
        if (empty($body)) {
            $jsonBody = '{}';
        } else {
            $jsonBody = json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
            if ($jsonBody === '[]') {
                $jsonBody = '{}';
            }
        }

        $message = "{$timestamp}:{$jsonBody}";
        return hash_hmac('sha512', $message, $secretKey);
    }

    public static function formatTimestamp(?\DateTimeInterface $dateTime = null): string
    {
        if ($dateTime === null) {
            // Tingee API server validates timestamps in Vietnam time (GMT+7).
            $dateTime = new \DateTime('now', new \DateTimeZone('Asia/Ho_Chi_Minh'));
        }

        $basePart = $dateTime->format('YmdHis');
        $microtime = microtime(true);
        $millis = str_pad((string)floor(($microtime - floor($microtime)) * 1000), 3, '0', STR_PAD_LEFT);

        return $basePart . $millis;
    }
}
