<?php

namespace swiatprzesylek\GL\Webhook\Event\Product;

class Update
{
    protected string $sku;

    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): Update
    {
        $this->sku = $sku;
        return $this;
    }




}