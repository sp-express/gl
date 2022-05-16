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
 * @property ?string $additional_barcode
 * @property ?string $additional_svg
 */
class BarcodeScanRequest extends DTO
{
    protected $barcode;
    protected $status;
    protected $latitude;
    protected $longitude;
    protected $datetime;
    protected $postman_id;
    protected $additional_barcode;
    protected $additional_svg;

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

    public function getAdditionalBarcode() : ?string
    {
        if($this->additional_barcode === null)
            return null;

        return (string) trim($this->additional_barcode);
    }

    public function setAdditionalBarcode(?string $additional_barcode): void
    {
        $this->additional_barcode = $additional_barcode;
    }

    public function getAdditionalSvg(): ?string
    {
        return $this->additional_barcode;
    }

    public function setAdditionalSvg(?string $additional_svg): void
    {
        $this->additional_svg = $additional_svg;
    }


}