<?php

namespace swiatprzesylek\GL\Webhook\Event\Product;

use App\Enum\SerialTypes;
use App\Enum\SerialValidatorTypes;
use swiatprzesylek\GL\Webhook\Event\BaseEvent;

class Update extends BaseEvent
{
    protected string $sku;

    protected ?string $ean = null;

    protected ?int $weightG = null;

    protected ?int $sizeL = null;

    protected ?int $sizeW = null;

    protected ?int $sizeD = null;

    protected ?string $hsCode = null;


    protected ?string $originCountry = null;


    protected ?string $description = null;

    protected ?string $serialType = null;

    protected ?string $serialValidator = null;

    protected ?string $innerBarcode = null;

    protected ?int $innerMultipliedBy = null;

    protected ?string $outerBarcode = null;

    protected ?int $outerMultipliedBy = null;

    protected \DateTime $createdAt;

    protected \DateTime $updatedAt;


    public function getSku(): string
    {
        return $this->sku;
    }

    public function setSku(string $sku): Update
    {
        $this->sku = $sku;
        return $this;
    }

    public function getEan(): ?string
    {
        return $this->ean;
    }

    public function setEan(?string $ean): Update
    {
        $this->ean = $ean;
        return $this;
    }

    public function getWeightG(): ?int
    {
        return $this->weightG;
    }

    public function setWeightG(?int $weightG): Update
    {
        $this->weightG = $weightG;
        return $this;
    }

    public function getSizeL(): ?int
    {
        return $this->sizeL;
    }

    public function setSizeL(?int $sizeL): Update
    {
        $this->sizeL = $sizeL;
        return $this;
    }

    public function getSizeW(): ?int
    {
        return $this->sizeW;
    }

    public function setSizeW(?int $sizeW): Update
    {
        $this->sizeW = $sizeW;
        return $this;
    }

    public function getSizeD(): ?int
    {
        return $this->sizeD;
    }

    public function setSizeD(?int $sizeD): Update
    {
        $this->sizeD = $sizeD;
        return $this;
    }

    public function getHsCode(): ?string
    {
        return $this->hsCode;
    }

    public function setHsCode(?string $hsCode): Update
    {
        $this->hsCode = $hsCode;
        return $this;
    }

    public function getOriginCountry(): ?string
    {
        return $this->originCountry;
    }

    public function setOriginCountry(?string $originCountry): Update
    {
        $this->originCountry = $originCountry;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): Update
    {
        $this->description = $description;
        return $this;
    }

    public function getSerialType(): ?string
    {
        return $this->serialType;
    }

    public function setSerialType(?string $serialType): Update
    {
        $this->serialType = $serialType;
        return $this;
    }

    public function getSerialValidator(): ?string
    {
        return $this->serialValidator;
    }

    public function setSerialValidator(?string $serialValidator): Update
    {
        $this->serialValidator = $serialValidator;
        return $this;
    }

    public function getInnerBarcode(): ?string
    {
        return $this->innerBarcode;
    }

    public function setInnerBarcode(?string $innerBarcode): Update
    {
        $this->innerBarcode = $innerBarcode;
        return $this;
    }

    public function getInnerMultipliedBy(): ?int
    {
        return $this->innerMultipliedBy;
    }

    public function setInnerMultipliedBy(?int $innerMultipliedBy): Update
    {
        $this->innerMultipliedBy = $innerMultipliedBy;
        return $this;
    }

    public function getOuterBarcode(): ?string
    {
        return $this->outerBarcode;
    }

    public function setOuterBarcode(?string $outerBarcode): Update
    {
        $this->outerBarcode = $outerBarcode;
        return $this;
    }

    public function getOuterMultipliedBy(): ?int
    {
        return $this->outerMultipliedBy;
    }

    public function setOuterMultipliedBy(?int $outerMultipliedBy): Update
    {
        $this->outerMultipliedBy = $outerMultipliedBy;
        return $this;
    }

    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): Update
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTime $updatedAt): Update
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
}