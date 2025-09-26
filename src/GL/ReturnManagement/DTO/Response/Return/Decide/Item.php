<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return\Decide;
use OpenApi\Attributes as OA;

class Item
{
    #[OA\Property(
        description: 'Local identifier for decide operation',
        example: 'R250926/999/008/003'
    )]
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
