<?php

class Factorial
{
    public function f($n)
    {
        if ($n < 0) {
            throw new Exception("Factorial of a negative number");
        } else if ($n > 9999) {
            throw new Exception("Too big dude");
        } else if ($n == 0) {
            return 1;
        } else {
            return $n * $this->f($n - 1);
        }
    }
}

?>
