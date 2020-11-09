<?php
class A
{
    protected $x;

    public function line_equation($a,$b)
    {
        return $a !== 0 ? $this->x = (-$b)/$a : null;
    }
}
