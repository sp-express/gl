<?php

declare(strict_types=1);

namespace swiatprzesylek\GL\DTO;

class Response extends DTO
{
    protected $success;
    protected $message;
    protected $httpCode;

    public static function responseWithSuccess(): Response
    {
        return new static([
            'success' => true
        ]);
    }

    public static function responseWithErrorMessage(string $message, ?int $httpCode): Response
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