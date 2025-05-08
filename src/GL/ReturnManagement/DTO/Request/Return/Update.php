<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Request\Return;

class Update
{
    protected ?string $localId = null;
    protected ?string $outboundLocalId = null;
    protected ?string $customerRef = null;

    protected ?string $operator = null;

    protected ?string $note = null;

    public function getLocalId(): ?string
    {
        return $this->localId;
    }

    public function setLocalId(?string $localId): Update
    {
        $this->localId = $localId;
        return $this;
    }

    public function getOutboundLocalId(): ?string
    {
        return $this->outboundLocalId;
    }

    public function setOutboundLocalId(?string $outboundLocalId): Update
    {
        $this->outboundLocalId = $outboundLocalId;
        return $this;
    }

    public function getCustomerRef(): ?string
    {
        return $this->customerRef;
    }

    public function setCustomerRef(?string $customerRef): Update
    {
        $this->customerRef = $customerRef;
        return $this;
    }

    public function getOperator(): ?string
    {
        return $this->operator;
    }

    public function setOperator(?string $operator): Update
    {
        $this->operator = $operator;
        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): Update
    {
        $this->note = $note;
        return $this;
    }
}