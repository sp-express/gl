<?php

declare(strict_types=1);

namespace swiatprzesylek\GL\DTO;

class Response extends DTO
{
    protected $success;
    protected $message;
    protected $httpCode;

    /**
     * @return static
     * @noinspection PhpMissingReturnTypeInspection
     */
    public static function responseWithSuccess(?string $message = "Status zapisany")
    {
        return new static([
            'success' => true,
            'message' => $message,
        ]);
    }

    /**
     * @param string $message
     * @param int|null $httpCode
     * @noinspection PhpMissingReturnTypeInspection
     * @return static
     */
    public static function responseWithErrorMessage(string $message, ?int $httpCode = null)
    {
        return new static([
            'success' => false,
            'message' => $message,
            'httpCode' => $httpCode,
        ]);
    }

    public function isSuccessful(): bool
    {
        return $this->success;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function getHttpCode(): ?int
    {
        return $this->httpCode;
    }


}