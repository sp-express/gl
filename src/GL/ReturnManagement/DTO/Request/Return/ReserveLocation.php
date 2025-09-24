<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Request\Return;

class ReserveLocation
{
    protected int $warehouseId;

    protected string $subinventoryInternalId;

    protected string $returnLocalId;

    public function getWarehouseId(): int
    {
        return $this->warehouseId;
    }

    public function setWarehouseId(int $warehouseId): ReserveLocation
    {
        $this->warehouseId = $warehouseId;
        return $this;
    }

    public function getSubinventoryInternalId(): string
    {
        return $this->subinventoryInternalId;
    }

    public function setSubinventoryInternalId(string $subinventoryInternalId): ReserveLocation
    {
        $this->subinventoryInternalId = $subinventoryInternalId;
        return $this;
    }

    public function getReturnLocalId(): string
    {
        return $this->returnLocalId;
    }

    public function setReturnLocalId(string $returnLocalId): ReserveLocation
    {
        $this->returnLocalId = $returnLocalId;
        return $this;
    }





}