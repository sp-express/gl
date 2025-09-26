<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;
use OpenApi\Attributes as OA;

class AddressData
{
    #[OA\Property(
        description: 'Name of the person',
        example: 'John Doe'
    )]
    protected ?string $name = null;

    #[OA\Property(
        description: 'Company name',
        example: 'ACME Corporation'
    )]
    protected ?string $company = null;

    #[OA\Property(
        description: 'First address line',
        example: '123 Main Street'
    )]
    protected string $addressLineFirst;

    #[OA\Property(
        description: 'Second address line',
        example: 'Apt 4B'
    )]
    protected ?string $addressLineSecond = null;

    #[OA\Property(
        description: 'City name',
        example: 'Warsaw'
    )]
    protected string $city;

    #[OA\Property(
        description: 'ZIP/Postal code',
        example: '00-001'
    )]
    protected string $zipCode;

    #[OA\Property(
        description: 'Province/State',
        example: 'Mazowieckie'
    )]
    protected ?string $province = null;

    #[OA\Property(
        description: 'Country code',
        example: 'PL'
    )]
    protected string $country;

    #[OA\Property(
        description: 'Phone number',
        example: '+48 123 456 789'
    )]
    protected ?string $phone = null;

    #[OA\Property(
        description: 'Email address',
        example: 'john.doe@example.com'
    )]
    protected ?string $email = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): AddressData
    {
        $this->name = $name;
        return $this;
    }

    public function getCompany(): ?string
    {
        return $this->company;
    }

    public function setCompany(?string $company): AddressData
    {
        $this->company = $company;
        return $this;
    }

    public function getAddressLineFirst(): string
    {
        return $this->addressLineFirst;
    }

    public function setAddressLineFirst(string $addressLineFirst): AddressData
    {
        $this->addressLineFirst = $addressLineFirst;
        return $this;
    }

    public function getAddressLineSecond(): ?string
    {
        return $this->addressLineSecond;
    }

    public function setAddressLineSecond(?string $addressLineSecond): AddressData
    {
        $this->addressLineSecond = $addressLineSecond;
        return $this;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): AddressData
    {
        $this->city = $city;
        return $this;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function setZipCode(string $zipCode): AddressData
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    public function getProvince(): ?string
    {
        return $this->province;
    }

    public function setProvince(?string $province): AddressData
    {
        $this->province = $province;
        return $this;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): AddressData
    {
        $this->country = $country;
        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): AddressData
    {
        $this->phone = $phone;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): AddressData
    {
        $this->email = $email;
        return $this;
    }
}