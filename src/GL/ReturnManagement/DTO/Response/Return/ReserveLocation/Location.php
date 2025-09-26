<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return\ReserveLocation;
use OpenApi\Attributes as OA;

class Location
{
    #[OA\Property(
        description: 'Local identifier',
        example: 'LOC-A1-001'
    )]
    protected string $localId;

    #[OA\Property(
        description: 'Sector identifier',
        example: 1
    )]
    protected ?int $sectorId = null;

    #[OA\Property(
        description: 'Size class',
        example: 'XL'
    )]
    protected ?string $sizeClass = null;

    #[OA\Property(
        description: 'Row type',
        example: 'AISLE'
    )]
    protected string $rowType;

    #[OA\Property(
        description: 'Location type',
        example: 'RACK'
    )]
    protected string $type;

    public function getLocalId(): string
    {
        return $this->localId;
    }

    public function setLocalId(string $localId): Location
    {
        $this->localId = $localId;
        return $this;
    }

    public function getSectorId(): ?int
    {
        return $this->sectorId;
    }

    public function setSectorId(?int $sectorId): Location
    {
        $this->sectorId = $sectorId;
        return $this;
    }

    public function getSizeClass(): ?string
    {
        return $this->sizeClass;
    }

    public function setSizeClass(?string $sizeClass): Location
    {
        $this->sizeClass = $sizeClass;
        return $this;
    }

    public function getRowType(): string
    {
        return $this->rowType;
    }

    public function setRowType(string $rowType): Location
    {
        $this->rowType = $rowType;
        return $this;
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function setType(string $type): Location
    {
        $this->type = $type;
        return $this;
    }
}