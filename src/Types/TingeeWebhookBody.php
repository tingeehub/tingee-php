<?php

namespace Tingee\Sdk\Types;

/**
 * Shape of the JSON body sent by Tingee webhook callbacks.
 * Compatible with Laravel/Symfony @RequestBody or json_decode().
 *
 * Usage in Laravel controller:
 * ```php
 * public function webhook(Request $request)
 * {
 *     $body = TingeeWebhookBody::fromArray($request->all());
 *     $result = TingeeSigner::verifyWebhookSignature(
 *         secretToken: env('TINGEE_SECRET_TOKEN'),
 *         signature:   $request->header('x-signature'),
 *         timestamp:   $request->header('x-request-timestamp'),
 *         body:        $body,
 *     );
 *     if (!$result->isValid()) {
 *         return response()->json($result, 401);
 *     }
 * }
 * ```
 */
class TingeeWebhookBody
{
    public string  $clientId;
    public string  $transactionCode;
    public int|float $amount;
    public ?string $content        = null;  // optional
    public string  $bank;
    public ?string $bankBin        = null;  // optional
    public string  $accountNumber;
    public ?string $vaAccountNumber = null; // optional
    /** Format: yyyyMMddHHmmss */
    public string  $transactionDate;
    /** @var array<array{name: string, value: string}>|null */
    public ?array  $additionalData  = null; // optional

    /**
     * Create from an associative array (e.g. from json_decode($body, true) or $request->all()).
     */
    public static function fromArray(array $data): self
    {
        $obj = new self();
        $obj->clientId        = $data['clientId']        ?? '';
        $obj->transactionCode = $data['transactionCode'] ?? '';
        $obj->amount          = $data['amount']          ?? 0;
        $obj->content         = $data['content']         ?? null;
        $obj->bank            = $data['bank']            ?? '';
        $obj->bankBin         = $data['bankBin']         ?? null;
        $obj->accountNumber   = $data['accountNumber']   ?? '';
        $obj->vaAccountNumber = $data['vaAccountNumber'] ?? null;
        $obj->transactionDate = $data['transactionDate'] ?? '';
        $obj->additionalData  = $data['additionalData']  ?? null;
        return $obj;
    }

    /**
     * Convert back to array (for signature generation).
     */
    public function toArray(): array
    {
        $arr = [
            'clientId'        => $this->clientId,
            'transactionCode' => $this->transactionCode,
            'amount'          => $this->amount,
            'bank'            => $this->bank,
            'accountNumber'   => $this->accountNumber,
            'transactionDate' => $this->transactionDate,
        ];
        if ($this->content !== null)         $arr['content']         = $this->content;
        if ($this->bankBin !== null)         $arr['bankBin']         = $this->bankBin;
        if ($this->vaAccountNumber !== null) $arr['vaAccountNumber'] = $this->vaAccountNumber;
        if ($this->additionalData !== null)  $arr['additionalData']  = $this->additionalData;
        return $arr;
    }
}
