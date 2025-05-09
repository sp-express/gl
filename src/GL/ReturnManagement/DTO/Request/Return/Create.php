<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Request\Return;

class Create
{
    protected ?string $outboundLocalId = null;
    protected ?string $customerRef = null;
    protected string $trackingNumber;
    protected string $operator;

    protected ?string $note = null;

    public function getOutboundLocalId(): ?string
    {
        return $this->outboundLocalId;
    }

    public function setOutboundLocalId(?string $outboundLocalId): Create
    {
        $this->outboundLocalId = $outboundLocalId;
        return $this;
    }

    public function getCustomerRef(): ?string
    {
        return $this->customerRef;
    }

    public function setCustomerRef(?string $customerRef): Create
    {
        $this->customerRef = $customerRef;
        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): Create
    {
        $this->note = $note;
        return $this;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function setTrackingNumber(string $trackingNumber): Create
    {
        $this->trackingNumber = $trackingNumber;
        return $this;
    }

    public function getOperator(): string
    {
        return $this->operator;
    }

    public function setOperator(string $operator): Create
    {
        $this->operator = $operator;
        return $this;
    }
}
