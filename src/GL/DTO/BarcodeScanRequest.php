<?php

declare(strict_types=1);

namespace swiatprzesylek\GL\DTO;

/**
 * @property string $barcode
 * @property string $status
 * @property ?string $latitude
 * @property ?string $longitude
 * @property ?string $datetime
 * @property ?int $postman_id
 */
class BarcodeScanRequest extends DTO
{
    protected $barcode;
    protected $status;
    protected $latitude;
    protected $longitude;
    protected $datetime;
    protected $postman_id;

    public function getBarcode(): string
    {
        return (string)trim($this->barcode);
    }

    public function setBarcode(string $barcode): void
    {
        $this->barcode = $barcode;
    }

    public function getStatus(): string
    {
        return (string) $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getDatetime(): ?string
    {
        return $this->datetime;
    }

    public function setDatetime(string $datetime): void
    {
        $this->datetime = $datetime;
    }

    public function getPostman_Id(): ?int
    {
        return $this->postman_id;
    }

    public function setPostman_Id(int $postmanId): void
    {
        $this->postman_id = $postmanId;
    }


}