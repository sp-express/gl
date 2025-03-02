<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Request\Return;

class DecisionItem
{
    protected string $sku;
    protected int $quantityAccepted;

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): DecisionItem
    {
        $this->sku = $sku;
        return $this;
    }

    public function getQuantityAccepted(): int
    {
        return $this->quantityAccepted;
    }

    public function setQuantityAccepted(int $quantityAccepted): DecisionItem
    {
        $this->quantityAccepted = $quantityAccepted;
        return $this;
    }



}