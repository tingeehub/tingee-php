<?php

namespace Tingee\Sdk\Types;

/**
 * Standard API response structure from Tingee API
 *
 * @template T
 */
class TingeeApiResponse
{
    private ?string $code;
    private ?string $message;
    
    /** @var T|null */
    private mixed $data;

    /**
     * @param string|null $code
     * @param string|null $message
     * @param T|null $data
     */
    public function __construct(?string $code = null, ?string $message = null, mixed $data = null)
    {
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    /**
     * @return T|null
     */
    public function getData(): mixed
    {
        return $this->data;
    }

    /**
     * @param T|null $data
     */
    public function setData(mixed $data): void
    {
        $this->data = $data;
    }

    /**
     * Check if the response indicates success
     * @return bool true if code is "00"
     */
    public function isSuccess(): bool
    {
        return $this->code === '00';
    }

    /**
     * Check if the response indicates an error
     * @return bool true if code is not "00"
     */
    public function isError(): bool
    {
        return !$this->isSuccess();
    }
}
