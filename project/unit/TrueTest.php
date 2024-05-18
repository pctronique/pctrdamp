<?php 
use PHPUnit\Framework\TestCase;

final class TrueTest extends TestCase
{
    public function testTrue(): void
    {
        $this->assertTrue(true);
    }

    public function testFalse(): void
    {
        $this->assertTrue(false);
    }
}
