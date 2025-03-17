<?php

namespace swiatprzesylek\GL\Webhook\Request;

use swiatprzesylek\GL\Webhook\Enums\Type;

class Create
{
    protected string $payload;
    protected string $type;

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function setPayload(string $payload): Create
    {
        $this->payload = $payload;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): Create
    {
        $this->type = $type;
        return $this;
    }
}