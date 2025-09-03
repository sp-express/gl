<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;

class Product
{
    protected string $sku;
    protected ?string $ean = null;
    protected ?string $description = null;
    protected string $uuid;
    protected ?string $condition = null;
    protected ?string $decision = null;
    protected ?string $notes = null;
    protected ?bool $received = null;

    /** @var File[] */
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
