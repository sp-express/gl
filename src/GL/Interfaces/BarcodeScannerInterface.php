<?php

declare(strict_types=1);

namespace swiatprzesylek\GL\Interfaces;

use swiatprzesylek\GL\DTO\BarcodeScanRequest;
use swiatprzesylek\GL\DTO\BarcodeScanResponse;

interface BarcodeScannerInterface
{
    public function scan(BarcodeScanRequest $request): BarcodeScanResponse;
}