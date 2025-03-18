<?php

namespace swiatprzesylek\GL\Webhook\Response;

class Create
{
    protected int $id;
    protected string $type;
    protected string $url;
    protected string $payload;
    protected int $timeout;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): Create
    {
        $this->id = $id;
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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): Create
    {
        $this->url = $url;
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