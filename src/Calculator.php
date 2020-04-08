<?php

namespace App;

use DivisionByZeroError;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function mul($a, $b)
    {
        return $a * $b;
    }

    public function div($a, $b)
    {
        try {
            return  $a/$b;
        }
        catch(DivisionByZeroError $e){
            echo $e->getMessage();
        }
    }
}