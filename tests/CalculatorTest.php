<?php

use PHPUnit\Framework\TestCase;
use TravisTest\Calculator;

class CalculatorTest extends TestCase
{
    /** @var Calculator $calculator */
    private $calculator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->calculator = new Calculator();
    }

    public function testAddValues()
    {
        $this->assertEquals(2, $this->calculator->add(1, 1));
    }
}