<?php

require_once 'Factorial.php';

class FactorialTest extends PHPUnit_Framework_TestCase
{
    protected $fac;

    protected function setUp()
    {
        $this->fac = new Factorial;
    }

    public function testFactorialZero()
    {
        // Complete this assertion
        $this->assertEquals(2, $this->fac->f(0));
    }

    public function testFactorialOne() {
        $this->assertEquals(1, $this->fac->f(1));
    }

    /**
     * @expectedException Exception
     */
    public function testFactorialLessThanZero() {
        $this->fac->f(-1);
    }

    public function testFactorialOfTen() {
        $this->assertEquals(3628800, $this->fac->f(10));
    }

    public function testFactorialOfChar()
    {
        // Complete this assertion
        $this->assertEquals(1, $this->fac->f('a'));
    }

    /**
     * @expectedException Exception
     */
    public function testFactorialGreaterThan9999()
    {
        // Complete this assertion
        $this->fac->f(10000);
    }

    /*
     * Add at least 2 more characterisation tests. The following URL will help with one of them:
     * http://phpunit.de/manual/3.7/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.exceptions
     */
}
?>
