<?php

declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use swiatprzesylek\GL\DTO\BarcodeScanRequest;

final class BarcodeScanRequestTest extends TestCase
{
    public function testIsBarcodeSetCorrectly(): void
    {
        $request = new BarcodeScanRequest([
            'barcode' => '1234567',
        ]);

        $this->assertEquals('1234567', $request->getBarcode());
    }

    public function testIsStatusSetCorrectly(): void
    {
        $request = new BarcodeScanRequest([
            'barcode' => '1234567',
            'status' => 'SOME_STATUS',
        ]);

        $this->assertEquals('SOME_STATUS', $request->getStatus());
    }

    public function testIsBarcodeTrimsCorrectly(): void
    {
        $request = new BarcodeScanRequest([
            'barcode' => '       1234567  ',
            'status' => 'SOME_STATUS',
        ]);

        $this->assertEquals('1234567', $request->getBarcode());
    }

    public function testAreAllPropertiesSetCorrectlyAndAccessible(): void
    {
        $request = new BarcodeScanRequest([
            'barcode' => '       1234567  ',
            'status' => 'SOME_FINE_STATUS',
            'datetime' => '2020-10-07 10:30:00',
            'postman_id' => 20,
            'latitude' => '51.17440000',
            'longitude' => '17.01020000',
        ]);

        $this->assertEquals('1234567', $request->barcode);
        $this->assertEquals('SOME_FINE_STATUS', $request->status);
        $this->assertEquals('2020-10-07 10:30:00', $request->datetime);
        $this->assertEquals(20, $request->postman_id);
        $this->assertEquals('51.17440000', $request->latitude);
        $this->assertEquals('17.01020000', $request->longitude);
    }

    public function testAreAllNullablePropertiesSetCorrectlyAndAccessible(): void
    {
        $request = new BarcodeScanRequest([
            'barcode' => '999999999',
        ]);

        $this->assertNull($request->datetime);
        $this->assertNull($request->postman_id);
        $this->assertNull($request->longitude);
        $this->assertNull($request->latitude);
    }

    public function testArePropertiesAreSettable(): void
    {
        $request = new BarcodeScanRequest();

        $request->postman_id = 1;
        $request->barcode = '12312312';
        $request->status = 'SOME_GOOD_STATUS';
        $request->latitude = '51.17440000';
        $request->longitude = '17.01020000';

        $this->assertEquals(1, $request->postman_id);
        $this->assertEquals('12312312', $request->barcode);
        $this->assertEquals('SOME_GOOD_STATUS', $request->status);
        $this->assertEquals( '51.17440000', $request->latitude);
        $this->assertEquals( '17.01020000', $request->longitude);
    }



}