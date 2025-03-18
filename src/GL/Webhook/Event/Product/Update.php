<?php

namespace swiatprzesylek\GL\Webhook\Event\Product;

use swiatprzesylek\GL\Webhook\Event\BaseEvent;

class Update extends BaseEvent
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