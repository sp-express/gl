<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Request\Return;

class Update
{
    protected string $outboundId;

    public function getOutboundId(): string
    {
        return $this->outboundId;
    }

    public function setOutboundId(string $outboundId): Update
    {
        $this->outboundId = $outboundId;
        return $this;
    }
}