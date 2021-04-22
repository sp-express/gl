<?php

declare(strict_types=1);

namespace swiatprzesylek\GL\DTO;

/**
 * @property-read string $barcode
 * @property-read string $status
 * @property-read ?string $latitude
 * @property-read ?string $longitude
 */
class BarcodeScanRequest extends DTO
{
    protected $barcode;
    protected $status;
    protected $latitude;
    protected $longitude;

    public function getBarcode(): string
    {
        return $this->barcode;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLongitude(): ?string
    {
        return $this->longitude;
    }



}