<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;

class Metadata
{
    protected string $originalName;
    protected string $mimeType;
    protected int $size;

    protected string $extension;

    public function getOriginalName(): string
    {
        return $this->originalName;
    }

    public function setOriginalName(string $originalName): Metadata
    {
        $this->originalName = $originalName;
        return $this;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): Metadata
    {
        $this->mimeType = $mimeType;
        return $this;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function setSize(int $size): Metadata
    {
        $this->size = $size;
        return $this;
    }

    public function getExtension(): string
    {
        return $this->extension;
    }

    public function setExtension(string $extension): Metadata
    {
        $this->extension = $extension;
        return $this;
    }

}