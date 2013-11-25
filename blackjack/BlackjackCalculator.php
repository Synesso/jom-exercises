<?php

class BlackjackCalculator {

    private $score = 0;

    public function addCard($c) {
        $this->score += 5;
    }

    public function getScore() {
        return $this->score;
    }

} 