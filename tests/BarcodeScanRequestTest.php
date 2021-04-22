<?php

declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use swiatprzesylek\GL\DTO\BarcodeScanRequest;

class BarcodeScanRequestTest extends TestCase
{
    public function testIsBarcodeSetCorrectly(): void
    {
        $request = new BarcodeScanRequest([
            'barcode' => '1234567',
        ]);

        $this->assertEquals( '1234567', $request->getBarcode());
    }

    public function testIsStatusSetCorrectly(): void
    {
        $request = new BarcodeScanRequest([
            'barcode' => '1234567',
            'status' => 'SOME_STATUS',
        ]);

        $this->assertEquals( 'SOME_STATUS', $request->getStatus());
    }

    public function testIsBarcodeTrimsCorrectly(): void
    {
        $request = new BarcodeScanRequest([
            'barcode' => '       1234567  ',
            'status' => 'SOME_STATUS',
        ]);

        $this->assertEquals( '12345671', $request->getBarcode());
    }

}