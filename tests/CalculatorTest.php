<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testMul($a, $b)
    {
        self::assertEquals($a*$b, $this);
    }

    public function testDiv($a, $b)
    {
        self::assertEquals($a/$b, $this);
    }

    public function testAdd($a, $b)
    {
        self::assertEquals($a+$b, $this);
    }

    public function testSub($a, $b)
    {
        self::assertEquals($a-$b, $this);
    }
}
