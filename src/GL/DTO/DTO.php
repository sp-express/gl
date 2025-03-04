<?php

declare(strict_types=1);

namespace swiatprzesylek\GL\DTO;

use JsonSerializable;

class DTO implements JsonSerializable
{
    public function __construct($data = [])
    {
        $this->setProperties($data);
    }

    public function jsonSerialize(): array
    {
        return get_object_vars($this);
    }

    public function getProperties(): array
    {
        return get_object_vars($this);
    }

    public function setProperties($data): void
    {
        foreach ($data as $key => $value) {
            $this->$key = $value;
        }
    }

    public function __get($attribute)
    {
        $method = 'get' . ucfirst($attribute);

        if (!method_exists($this, $method)) {
            return;
        }

        return $this->$method($attribute);
    }

    public function __set($attribute, $value)
    {
        $method = 'set' . ucfirst($attribute);

        if (!method_exists($this, $method)) {
            return;
        }

        $this->$method($value);
    }

    public function toArray(): array
    {
        return $this->getProperties();
    }

}
