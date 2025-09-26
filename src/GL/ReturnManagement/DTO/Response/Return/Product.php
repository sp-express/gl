<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;
use OpenApi\Attributes as OA;

#[OA\Schema(
    schema: 'Product',
    description: 'Product information'
)]
class Product
{
    #[OA\Property(
        description: 'Product SKU',
        example: 'ABC123'
    )]
    protected string $sku;

    #[OA\Property(
        description: 'Product EAN',
        example: '1234567890123'
    )]
    protected ?string $ean = null;

    #[OA\Property(
        description: 'Product description',
        example: 'Red cotton t-shirt size M'
    )]
    protected ?string $description = null;

    #[OA\Property(
        description: 'Product UUID',
        example: '550e8400-e29b-41d4-a716-446655440000'
    )]
    protected string $uuid;

    #[OA\Property(
        description: 'Product condition',
        example: 'new'
    )]
    protected ?string $condition = null;

    #[OA\Property(
        description: 'Return decision',
        example: 'approved'
    )]
    protected ?string $decision = null;

    #[OA\Property(
        description: 'Additional notes',
        example: 'Item in perfect condition'
    )]
    protected ?string $notes = null;

    #[OA\Property(
        description: 'Whether the product was received',
        example: true
    )]
    protected ?bool $received = null;

    #[OA\Property(
        description: 'Array of files',
        type: 'array',
        items: new OA\Items(ref: 'File')
    )]
    protected array $files;

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): Product
    {
        $this->sku = $sku;
        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): Product
    {
        $this->ean = $ean;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): Product
    {
        $this->description = $description;
        return $this;
    }

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): Product
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getCondition(): ?string
    {
        return $this->condition;
    }

    public function setCondition(?string $condition): Product
    {
        $this->condition = $condition;
        return $this;
    }

    public function getDecision(): ?string
    {
        return $this->decision;
    }

    public function setDecision(?string $decision): Product
    {
        $this->decision = $decision;
        return $this;
    }

    public function getNotes(): ?string
    {
        return $this->notes;
    }

    public function setNotes(?string $notes): Product
    {
        $this->notes = $notes;
        return $this;
    }

    public function getReceived(): ?bool
    {
        return $this->received;
    }

    public function setReceived(?bool $received): Product
    {
        $this->received = $received;
        return $this;
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function setFiles(array $files): Product
    {
        $this->files = $files;
        return $this;
    }



}
