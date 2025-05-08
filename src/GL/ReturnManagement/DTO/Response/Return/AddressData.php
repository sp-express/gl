<?php

namespace swiatprzesylek\GL\ReturnManagement\DTO\Response\Return;

class AddressData
{
    protected ?string $name = null;
    protected ?string $company = null;

    protected string $addressLineFirst;
    protected ?string $addressLineSecond = null;
    protected string $city;
    protected string $zipCode;
    protected ?string $province = null;
    protected string $country;
    protected ?string $phone = null;
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