<?php
namespace CodeLab;

class Calculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function substract($a, $b)
    {
        return $a - $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function divide($a, $b)
    {
        return $a / $b;
    }

    public function power($a, $b)
    {
        return pow($a, $b);
    }

    public function sqrt($a)
    {
        return sqrt($a);
    }
}