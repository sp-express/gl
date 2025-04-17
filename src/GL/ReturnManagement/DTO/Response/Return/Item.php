<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;

class Item
{
    protected string $localId;
    protected string $trackingNumber;

    protected string $operator;
    protected \DateTimeImmutable $createdAt;
    protected \DateTimeImmutable $updatedAt;
    protected string $status;

    /**
     * @var Product[]
     */
    protected array $products = [];

    /**
     * @var File[]
     */
    protected array $files = [];

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

}
