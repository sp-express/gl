<?php

declare(strict_types=1);

use swiatprzesylek\GL\Exceptions\pgpApp\VisibleScanException;
use PHPUnit\Framework\TestCase;

final class VisibleScanExceptionTest extends TestCase
{
    public function testIsThrownCorrectly(): void
    {
        try {
            throw new VisibleScanException('Something went wrong');
        } catch (\Throwable $exception) {
            $this->assertInstanceOf(VisibleScanException::class, $exception);
        }
    }

}
