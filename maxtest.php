<?php

require_once __DIR__ . '/vendor/autoload.php';
require_once 'function.php';

use PHPUnit\Framework\TestCase;

class MaxTest extends TestCase
{
    
    public function testReturnString()
    {
        $this->assertTrue(is_int(gettype(getMax([2,5,7,1]))));
    }

    public function testMax()
    {
        $this->assertEquals(getMax([2,5,7,1]), 7);
        $this->assertEquals(getMax([5,10,300,1]), 300);
    }

    public function testEmptyArray()
    {
        $this->assertEquals(getMax([]), 0);
    }

}
