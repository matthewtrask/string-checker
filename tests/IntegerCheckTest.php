<?php

namespace Trask\Utils\Tests;

use PHPUnit\Framework\TestCase;
use Trask\Utils\IntegerCheck;

class IntegerCheckTest extends TestCase
{
    /**
     * @var IntegerCheck
     */
    private $integerCheck;

    protected function setup()
    {
        $this->integerCheck = new IntegerCheck();
    }

    public function testCanGetInstance()
    {
        $this->assertInstanceOf(IntegerCheck::class, $this->integerCheck);
    }

    public function testPerformCheckWithStringIsFalse()
    {
        $string = '123';
        $this->assertFalse($this->integerCheck->performCheck($string));
    }

    public function testPerformCheckWithIntegerIsTrue()
    {
        $integer = 123;
        $this->assertTrue($this->integerCheck->performCheck($integer));
    }

    public function testInvoke()
    {
        $integer = 123;
        $this->assertTrue(($this->integerCheck)($integer));
    }
}
