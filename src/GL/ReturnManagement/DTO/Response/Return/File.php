<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'File',
    description: 'File information'
)]
class File
{
    #[OA\Property(
        description: 'File label',
        example: 'product_image.jpg'
    )]
    protected string $label;

    #[OA\Property(
        description: 'File URL',
        example: 'https://example.com/files/product_image.jpg'
    )]
    protected string $url;

    #[OA\Property(
        description: 'File metadata',
        ref: 'Metadata'
    )]
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
