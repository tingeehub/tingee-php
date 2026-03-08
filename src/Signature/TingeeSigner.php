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
    private const REQUIRED_BODY_FIELDS = ['clientId', 'transactionCode', 'amount', 'bank', 'accountNumber', 'transactionDate'];

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
        $ms   = str_pad((int) round((microtime(true) - floor(microtime(true))) * 1000), 3, '0', STR_PAD_LEFT);
        return $date->format('YmdHis') . $ms;
    }

    /**
     * Verify webhook signature using a typed TingeeWebhookBody.
     * Recommended when using Laravel/Symfony with Request binding.
     *
     * @example
     * ```php
     * $body   = TingeeWebhookBody::fromArray($request->all());
     * $result = TingeeSigner::verifyWebhookSignature(
     *     secretToken: $_ENV['TINGEE_SECRET_TOKEN'],
     *     signature:   $request->header('x-signature'),
     *     timestamp:   $request->header('x-request-timestamp'),
     *     body:        $body,
     * );
     * if (!$result->isValid()) {
     *     return response()->json($result, 401);
     * }
     * ```
     */
    public static function verifyWebhookSignature(
        string $secretToken,
        string $signature,
        string $timestamp,
        array|string $body
    ): WebhookVerifyResult {
        // Normalise to array for validation and signing
        if (is_string($body)) {
            $decoded = json_decode($body, true);
            if ($decoded === null) {
                return new WebhookVerifyResult('INVALID_BODY', 'body string is not valid JSON');
            }
            $arr = $decoded;
        } else {
            $arr = $body;
        }

        if (!$signature) {
            return new WebhookVerifyResult('MISSING_SIGNATURE', 'x-signature header is required');
        }
        if (!$timestamp) {
            return new WebhookVerifyResult('MISSING_TIMESTAMP', 'x-request-timestamp header is required');
        }
        if (!preg_match('/^\d{17}$/', $timestamp)) {
            return new WebhookVerifyResult('INVALID_TIMESTAMP', 'x-request-timestamp must be in yyyyMMddHHmmssSSS format (17 digits)');
        }
        if (empty($arr) || !is_array($arr)) {
            return new WebhookVerifyResult('MISSING_BODY', 'body is required and must be an object');
        }

        foreach (self::REQUIRED_BODY_FIELDS as $field) {
            if (empty($arr[$field]) && $arr[$field] !== 0) {
                return new WebhookVerifyResult('MISSING_BODY_FIELD', "body.{$field} is required");
            }
        }

        $expected = self::generateSignature($secretToken, $timestamp, $arr);

        // Timing-safe comparison
        if (!hash_equals($expected, strtolower($signature))) {
            return new WebhookVerifyResult('INVALID_SIGNATURE', 'Signature does not match');
        }

        return new WebhookVerifyResult('00', 'Success');
    }
}
