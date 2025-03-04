<?php

declare(strict_types=1);

namespace swiatprzesylek\GL\DTO;

class BarcodeScanResponse extends Response
{
    public function jsonSerialize(): array
    {
        return array_filter(get_object_vars($this), function ($v, $k) {
            return $v !== null;
        }, ARRAY_FILTER_USE_BOTH);
    }


}
