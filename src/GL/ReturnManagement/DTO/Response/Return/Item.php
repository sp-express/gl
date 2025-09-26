<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;
use OpenApi\Attributes as OA;

class Item
{
    #[OA\Property(
        description: 'Local identifier',
        example: 'R250926/999/008/001'
    )]
    protected string $localId;

    #[OA\Property(
        description: 'Tracking number',
        example: 'TN123456789PL'
    )]
    protected string $trackingNumber;

    #[OA\Property(
        description: 'Operator name',
        example: 'DPD'
    )]
    protected string $operator;

    #[OA\Property(
        description: 'Creation timestamp',
        type: 'string',
        format: 'date-time',
        example: '2023-09-26T10:00:00+00:00'
    )]
    protected \DateTimeImmutable $createdAt;

    #[OA\Property(
        description: 'Last update timestamp',
        type: 'string',
        format: 'date-time',
        example: '2023-09-26T15:30:00+00:00'
    )]
    protected \DateTimeImmutable $updatedAt;

    #[OA\Property(
        description: 'Return status',
        example: 'processed'
    )]
    protected string $status;

    #[OA\Property(
        description: 'Outbound local identifier',
        example: 'OUT123456'
    )]
    protected ?string $outboundLocalId = null;

    #[OA\Property(
        description: 'Inbound local identifier',
        example: 'IN123456'
    )]
    protected ?string $inboundLocalId = null;

    #[OA\Property(
        description: 'Additional notes',
        example: 'Customer return in good condition'
    )]
    protected ?string $note = null;

    #[OA\Property(
        description: 'Array of products',
        type: 'array',
        items: new OA\Items(ref: '#/components/schemas/Product')
    )]
    protected array $products = [];

    #[OA\Property(
        description: 'Array of files',
        type: 'array',
        items: new OA\Items(ref: '#/components/schemas/File')
    )]
    protected array $files = [];

    #[OA\Property(
        description: 'Address data',
        ref: '#/components/schemas/AddressData'
    )]
    protected ?AddressData $address = null;

    public function getLocalId(): string
    {
        return $this->localId;
    }

    public function setLocalId(string $localId): Item
    {
        $this->localId = $localId;
        return $this;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(string $trackingNumber): Item
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function getCreatedAt(): \DateTimeImmutable
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeImmutable $createdAt): Item
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): \DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): Item
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): Item
    {
        $this->status = $status;
        return $this;
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function setProducts(array $products): Item
    {
        $this->products = $products;
        return $this;
    }

    public function getFiles(): array
    {
        return $this->files;
    }

    public function setFiles(array $files): Item
    {
        $this->files = $files;
        return $this;
    }

    public function getOperator(): string
    {
        return $this->operator;
    }

    public function setOperator(string $operator): Item
    {
        $this->operator = $operator;
        return $this;
    }

    public function getAddress(): ?AddressData
    {
        return $this->address;
    }

    public function setAddress(?AddressData $address): Item
    {
        $this->address = $address;
        return $this;
    }

    public function getOutboundLocalId(): ?string
    {
        return $this->outboundLocalId;
    }

    public function setOutboundLocalId(?string $outboundLocalId): Item
    {
        $this->outboundLocalId = $outboundLocalId;
        return $this;
    }

    public function getInboundLocalId(): ?string
    {
        return $this->inboundLocalId;
    }

    public function setInboundLocalId(?string $inboundLocalId): Item
    {
        $this->inboundLocalId = $inboundLocalId;
        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): Item
    {
        $this->note = $note;
        return $this;
    }
}
