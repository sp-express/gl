<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Request\Return;

class Decision
{
    protected string $localId;

    /** @var DecisionItem[] */
    protected array $items = [];

    public function getLocalId(): string
    {
        return $this->localId;
    }

    public function setLocalId(string $localId): Decision
    {
        $this->localId = $localId;
        return $this;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(array $items): Decision
    {
        $this->items = $items;
        return $this;
    }

    public static function getNestedTypes(): array
    {
        return [
            'items' => DecisionItem::class,
        ];
    }
}
