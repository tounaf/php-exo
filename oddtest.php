<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'function.php';

use PHPUnit\Framework\TestCase;

class OddTest extends TestCase
{
    
    public function testIsOdd()
    {
        $this->assertTrue(isOdd(2));
    }

    public function testIsOdd2()
    {
        $this->assertTrue(isOdd(4));
    }

    public function testIsNotOdd()
    {
        $this->assertFalse(isOdd(1));
    }

    public function testIsNotOdd2()
    {
        $this->assertFalse(isOdd(3));
    }
}
