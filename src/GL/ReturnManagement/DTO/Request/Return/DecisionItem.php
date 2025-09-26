<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Request\Return;

class DecisionItem
{
    protected string $uuid;
    protected string $decision;

    public function getUuid(): string
    {
        return $this->uuid;
    }

    public function setUuid(string $uuid): DecisionItem
    {
        $this->uuid = $uuid;
        return $this;
    }

    public function getDecision(): string
    {
        return $this->decision;
    }

    public function setDecision(string $decision): DecisionItem
    {
        $this->decision = $decision;
        return $this;
    }



}
