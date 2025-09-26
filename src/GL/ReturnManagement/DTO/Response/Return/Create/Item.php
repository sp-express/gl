<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return\Create;

class Item
{
    protected string $localId;
    protected array $items;

    public function getLocalId(): string
    {
        return $this->localId;
    }

    public function setLocalId(string $localId): Item
    {
        $this->localId = $localId;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): Item
    {
        $this->items = $items;
        return $this;
    }



}
