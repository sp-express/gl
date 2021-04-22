<?php

declare(strict_types=1);

namespace swiatprzesylek\GL\DTO;

class Response extends DTO
{
    protected $success;
    protected $message;

    public static function responseWithSuccess(): Response
    {
        return new static([
            'success' => true
        ]);
    }

    public static function responseWithErrorMessage(string $message): Response
    {
        return new static([
            'success' => false,
            'message' => $message,
        ]);
    }

    public function isSuccessful(): bool
    {
        return $this->success;
    }

}