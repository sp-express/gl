<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;


class File
{
    protected string $label;
    protected string $url;
    protected Metadata $metadata;

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): File
    {
        $this->label = $label;
        return $this;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): File
    {
        $this->url = $url;
        return $this;
    }

    public function getMetadata(): Metadata
    {
        return $this->metadata;
    }

    public function setMetadata(Metadata $metadata): File
    {
        $this->metadata = $metadata;
        return $this;
    }
}