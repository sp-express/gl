<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;

class Product
{
    protected string $sku;
    protected ?string $ean;
    protected ?string $description;
    protected ?int $quantityExpected;
    protected ?int $quantityActual;

    protected ?int $quantityReturned;

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

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): Product
    {
        $this->description = $description;
        return $this;
    }

    public function getQuantityExpected(): ?int
    {
        return $this->quantityExpected;
    }

    public function setQuantityExpected(?int $quantityExpected): Product
    {
        $this->quantityExpected = $quantityExpected;
        return $this;
    }

    public function getQuantityActual(): ?int
    {
        return $this->quantityActual;
    }

    public function setQuantityActual(?int $quantityActual): Product
    {
        $this->quantityActual = $quantityActual;
        return $this;
    }





}