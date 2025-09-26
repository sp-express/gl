<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Request\Return;

class ReserveLocation
{
    protected string $returnLocalId;


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