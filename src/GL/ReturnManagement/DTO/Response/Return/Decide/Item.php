<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return\Decide;

class Item
{
    protected string $localId;

    public function getLocalId(): string
    {
        return $this->localId;
    }

    public function setLocalId(string $localId): Item
    {
        $this->localId = $localId;
        return $this;
    }
}