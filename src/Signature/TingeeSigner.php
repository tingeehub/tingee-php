<?php

namespace Tingee\Sdk\Signature;

use InvalidArgumentException;

/**
 * Result of verifyWebhookSignature().
 * code === '00' means success.
 */
class WebhookVerifyResult
{
    public string $code;
    public string $message;

    public function __construct(string $code, string $message)
    {
        $this->code    = $code;
        $this->message = $message;
    }

    public function isValid(): bool
    {
        return $this->code === '00';
    }
}

class TingeeSigner
{
    /** Required fields that every Tingee webhook body must contain */
    private const REQUIRED_BODY_FIELDS = ['clientId', 'transactionCode', 'amount', 'bank', 'transactionDate'];

    /**
     * Generate HMAC-SHA512 signature for a Tingee API request.
     *
     * message = "{timestamp}:{json_body}"
     */
    public static function generateSignature(string $secretKey, string $timestamp, array $body): string
    {
        $message = $timestamp . ':' . json_encode($body, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        return hash_hmac('sha512', $message, $secretKey);
    }

    /**
     * Format a DateTime to Tingee timestamp format: yyyyMMddHHmmssSSS (17 chars).
     */
    public static function formatTimestamp(\DateTimeInterface $date = null): string
    {
        $date = $date ?? new \DateTime();
        // PHP milliseconds via getTimestamp + microtime workaround
        $ms   = str_pad((int) round((microtime(true) - floor(microtime(true))) * 1000), 3, '0', STR_PAD_LEFT);
        return $date->format('YmdHis') . $ms;
    }

    /**
     * Verify the HMAC-SHA512 signature of an incoming Tingee webhook callback.
     *
     * @param string $secretToken    Secret token from your merchant configuration
     * @param string $signature      Value of the x-signature header
     * @param string $timestamp      Value of the x-request-timestamp header (yyyyMMddHHmmssSSS)
     * @param array  $body           Decoded JSON body of the webhook request
     *
     * @example
     * ```php
     * $result = TingeeSigner::verifyWebhookSignature(
     *     secretToken: $_ENV['TINGEE_SECRET_TOKEN'],
     *     signature:   $_SERVER['HTTP_X_SIGNATURE'],
     *     timestamp:   $_SERVER['HTTP_X_REQUEST_TIMESTAMP'],
     *     body:        json_decode(file_get_contents('php://input'), true),
     * );
     * if (!$result->isValid()) {
     *     http_response_code(401);
     *     echo json_encode(['code' => $result->code, 'message' => $result->message]);
     *     exit;
     * }
     * ```
     */
    public static function verifyWebhookSignature(
        string $secretToken,
        string $signature,
        string $timestamp,
        array  $body
    ): WebhookVerifyResult {
        if (!$signature) {
            return new WebhookVerifyResult('MISSING_SIGNATURE', 'x-signature header is required');
        }
        if (!$timestamp) {
            return new WebhookVerifyResult('MISSING_TIMESTAMP', 'x-request-timestamp header is required');
        }
        if (!preg_match('/^\d{17}$/', $timestamp)) {
            return new WebhookVerifyResult('INVALID_TIMESTAMP', 'x-request-timestamp must be in yyyyMMddHHmmssSSS format (17 digits)');
        }
        if (empty($body) || !is_array($body)) {
            return new WebhookVerifyResult('MISSING_BODY', 'body is required and must be an object');
        }

        foreach (self::REQUIRED_BODY_FIELDS as $field) {
            if (empty($body[$field]) && $body[$field] !== 0) {
                return new WebhookVerifyResult('MISSING_BODY_FIELD', "body.{$field} is required");
            }
        }

        $expected = self::generateSignature($secretToken, $timestamp, $body);

        // Timing-safe comparison
        if (!hash_equals($expected, strtolower($signature))) {
            return new WebhookVerifyResult('INVALID_SIGNATURE', 'Signature does not match');
        }

        return new WebhookVerifyResult('00', 'Success');
    }
}
