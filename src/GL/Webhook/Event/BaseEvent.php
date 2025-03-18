<?php

namespace swiatprzesylek\GL\Webhook\Event;

use JsonSerializable;
class BaseEvent implements JsonSerializable
{
    public function jsonSerialize(): array
    {
        $data = [];

        foreach (get_object_vars($this) as $property => $value) {
            if (isset($value)) {
                $data[$property] = $value;
            }
        }

        return $data;
    }
}