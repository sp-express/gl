<?php

declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use swiatprzesylek\GL\Enums\pgpApp\Scan;

final class ScanEnumTest extends TestCase
{
    public function testIsScanEnumExists()
    {
        $enum = new ReflectionClass(Scan::class);

        $this->assertArrayHasKey('TYPE_PGP_REGISTERED', $enum->getConstants());
        $this->assertArrayHasKey('TYPE_BBI', $enum->getConstants());
        $this->assertArrayHasKey('STATUS_DELIVERED', $enum->getConstants());
        $this->assertArrayHasKey('STATUS_COULD_NOT_DELIVER', $enum->getConstants());
        $this->assertArrayHasKey('STATUS_RECEIVED_IN_HUB', $enum->getConstants());
        $this->assertArrayHasKey('STATUS_PROCESSED_IN_HUB', $enum->getConstants());
        $this->assertArrayHasKey('STATUS_FORWARDED_FROM_HUB', $enum->getConstants());

    }

}