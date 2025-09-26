<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return\Create;
use OpenApi\Attributes as OA;
class Item
{
    #[OA\Property(
        description: 'Local identifier',
        example: 'R250926/999/008/002'
    )]
    public string $localId;

    #[OA\Property(
        description: 'Map of product IDs to arrays of item UUIDs',
        type: 'object',
        example: [
            '33969' => [
                '44177d85-5a9b-465f-879b-46881a77b697',
                '8c555273-028f-47e5-85c6-5aed052fdb0d',
            ],
        ],
        additionalProperties: new OA\AdditionalProperties(
            type: 'array',
            items: new OA\Items(type: 'string', format: 'uuid')
        )
    )]
    public array $items;

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
