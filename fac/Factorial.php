<?php

class Factorial
{
    public function f($n)
    {
        if ($n < 0) {
            throw new Exception("Factorial of a negative number");
        } else if ($n == 0) {
            return 1;
        } else {
            return $n * $this->factorial($n - 1);
        }
    }
}

?>
