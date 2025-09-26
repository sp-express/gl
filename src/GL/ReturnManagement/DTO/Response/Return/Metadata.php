<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'Metadata',
    description: 'File metadata information'
)]
class Metadata
{
    #[OA\Property(
        description: 'Original file name',
        example: 'document.pdf'
    )]
    protected string $originalName;

    #[OA\Property(
        description: 'MIME type of the file',
        example: 'application/pdf'
    )]
    protected string $mimeType;

    #[OA\Property(
        description: 'File size in bytes',
        example: 1024000
    )]
    protected int $size;

    #[OA\Property(
        description: 'File extension',
        example: 'pdf'
    )]
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
