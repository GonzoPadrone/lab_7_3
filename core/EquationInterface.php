<?php
namespace core;

interface EquationInterface {
    /**
    * @param float $a
     * @param float $b
     * @param float $c
     *
     * @return array
     */
    public  function x_find($a,$b,$c);
}