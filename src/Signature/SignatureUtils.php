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
        // json_encode(null) === "null" — matches JSON.stringify(null) in JavaScript
        $jsonBody = json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

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

    /**
     * Verify HMAC-SHA512 signature of an incoming Tingee webhook.
     *
     * @param string $secretToken  Secret key from merchant config
     * @param string|null $signature  Value of x-signature header
     * @param string|null $timestamp  Value of x-request-timestamp header
     * @param array|string|null $body  Parsed body array OR raw JSON string
     * @return array{code: string, message: string}
     */
    public static function verifyWebhookSignature(
        string $secretToken,
        ?string $signature,
        ?string $timestamp,
        array|string|null $body
    ): array {
        if (empty($signature)) {
            return ['code' => 'MISSING_SIGNATURE', 'message' => 'x-signature header is required'];
        }
        if (empty($timestamp)) {
            return ['code' => 'MISSING_TIMESTAMP', 'message' => 'x-request-timestamp header is required'];
        }
        if (!preg_match('/^\d{17}$/', $timestamp)) {
            return ['code' => 'INVALID_TIMESTAMP', 'message' => 'x-request-timestamp must be in yyyyMMddHHmmssSSS format (17 digits)'];
        }

        // Accept raw JSON string — parse it automatically
        if (is_string($body)) {
            $decoded = json_decode($body, true);
            if (!is_array($decoded)) {
                return ['code' => 'INVALID_BODY', 'message' => 'body string is not valid JSON'];
            }
            $body = $decoded;
        }

        if (empty($body) || !is_array($body)) {
            return ['code' => 'MISSING_BODY', 'message' => 'body is required and must be an object'];
        }

        $requiredFields = ['clientId', 'transactionCode', 'amount', 'bank', 'transactionDate'];
        foreach ($requiredFields as $field) {
            if (empty($body[$field])) {
                return ['code' => 'MISSING_BODY_FIELD', 'message' => "body.{$field} is required"];
            }
        }

        $expected = self::generateSignature($secretToken, $timestamp, $body);

        // Timing-safe comparison
        if (!hash_equals($expected, strtolower($signature))) {
            return ['code' => 'INVALID_SIGNATURE', 'message' => 'Signature does not match'];
        }

        return ['code' => '00', 'message' => 'Success'];
    }
}
