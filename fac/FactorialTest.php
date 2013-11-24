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
    }

    /*
     * Add at least 2 more characterisation tests. The following URL will help with one of them:
     * http://phpunit.de/manual/3.7/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.exceptions
     */
}
?>
