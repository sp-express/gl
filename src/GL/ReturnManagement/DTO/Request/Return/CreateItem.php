<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Request\Return;

class CreateItem
{
    protected string $sku;
    protected int $quantity;

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): CreateItem
    {
        $this->sku = $sku;
        return $this;
    }

    public function getQuantity(): int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): CreateItem
    {
        $this->quantity = $quantity;
        return $this;
    }

}