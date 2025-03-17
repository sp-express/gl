<?php

namespace swiatprzesylek\GL\Webhook\Request;

use swiatprzesylek\GL\Webhook\Enums\Type;

class Create
{
    protected string $url;
    protected string $method;
    protected string $payload;
    protected Type $type;
    protected int $timeout = 10;

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Create
    {
        $this->url = $url;
        return $this;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function setMethod(string $method): Create
    {
        $this->method = $method;
        return $this;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function setPayload(string $payload): Create
    {
        $this->payload = $payload;
        return $this;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function setType(Type $type): Create
    {
        $this->type = $type;
        return $this;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function setTimeout(int $timeout): Create
    {
        $this->timeout = $timeout;
        return $this;
    }
}