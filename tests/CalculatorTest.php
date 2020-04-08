<?php

namespace App\Tests;

use App\Calculator;
use PHPUnit\Framework\TestCase;

final class CalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calculator = new Calculator();
        $result = $calculator->add(30, 12);
        $this->assertEquals(42, $result);
    }

    public function testDiv()
    {
        $calculator = new Calculator();
        $result = $calculator->div(10, 2);
        $this->assertEquals(5, $result);
    }

    public function testMul()
    {
        $calculator = new Calculator();
        $result = $calculator->mul(10, 2);
        $this->assertEquals(20, $result);
    }

    public function testSub()
    {
        $calculator = new Calculator();
        $result = $calculator->sub(10, 2);
        $this->assertEquals(8, $result);
    }
}
