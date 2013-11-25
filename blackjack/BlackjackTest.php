<?php

require_once 'BlackjackCalculator.php';

class BlackjackTest extends PHPUnit_Framework_TestCase {

    protected $calc;

    protected function setUp()
    {
        $this->calc = new BlackjackCalculator;
    }

    public function testNoCardAddedScoreIsZero()
    {
        $this->assertEquals(0, $this->calc->getScore());
    }

    public function testNumberCardIncrementsScore()
    {
        $this->calc->addCard(1);
        $this->assertEquals(5, $this->calc->getScore());
    }

    public function testNumberCardIncrementsScoreTwice()
    {
        $this->calc->addCard(1);
        $this->calc->addCard(1);
        $this->assertEquals(10, $this->calc->getScore());
    }



    /*
     * Complete this test class using the TDD methodology. Red, Green, Refactor.
     * After discussing with the user's proxy, the acceptance criteria on this story are:
     *
     * 1. When no cards are added the score is zero
     * 2. When a number card is added the score is incremented by that number
     * 3. When a face card is added the score is incremented by 10
     * 4. When an ace is added and the score is <= 10, the score is incremented by 11.
     * 5. When an ace is added and the score is >= 11, the score is incremented by 1.
     */

    // Note, with no tests in this class PHPUnit is not happy. The build is already Red! :)

}