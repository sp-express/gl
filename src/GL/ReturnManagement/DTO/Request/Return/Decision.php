<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Request\Return;

class Decision
{
    /** @var DecisionItem[] */
    protected array $items = [];

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): Decision
    {
        $this->items = $items;
        return $this;
    }
}