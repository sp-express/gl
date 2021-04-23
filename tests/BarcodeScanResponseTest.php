<?php

declare(strict_types=1);


use PHPUnit\Framework\TestCase;
use swiatprzesylek\GL\DTO\BarcodeScanResponse;

final class BarcodeScanResponseTest extends TestCase
{
    public function testIsSuccessfulResponseCorrect(): void
    {
        $response = BarcodeScanResponse::responseWithSuccess();
        $this->assertTrue($response->isSuccessful());
    }

    public function testIsErrorResponseCorrect(): void
    {
        $response = BarcodeScanResponse::responseWithErrorMessage('Some error');
        $this->assertFalse($response->isSuccessful());
    }

    public function testIsErrorResponseMessageSetCorrectly(): void
    {
        $response = BarcodeScanResponse::responseWithErrorMessage('Some error');
        $this->assertEquals('Some error', $response->getMessage());
    }

    public function testIsErrorHttpCodeMessageSetCorrectly(): void
    {
        $response = BarcodeScanResponse::responseWithErrorMessage('Some error', 403);
        $this->assertEquals(403, $response->getHttpCode());
    }

    public function testIsErrorEncodedJsonCorrect(): void
    {
        $response = BarcodeScanResponse::responseWithErrorMessage('Some error');

        $this->assertJsonStringEqualsJsonString('{"success":false,"message":"Some error"}',  json_encode($response));
    }

    public function testIsCorrectResponseClassIsReturned(): void
    {
        $response = BarcodeScanResponse::responseWithSuccess();

        $this->assertInstanceOf('swiatprzesylek\GL\DTO\BarcodeScanResponse', $response);
    }

    public function testIsCorrectParentResponseClassIsReturned(): void
    {
        $response = BarcodeScanResponse::responseWithSuccess();

        $this->assertInstanceOf('swiatprzesylek\GL\DTO\Response', $response);
    }

}