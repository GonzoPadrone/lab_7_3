<?php 
class A
{
    protected $x;

    public function line_equation($a,$b)
    {
        return $a !== 0 ? $this->x = (-$b)/$a : null;
    }
}

class B extends A
{
    public  function dis($a,$b,$c)
    {
        return ($b*$b)-4*$a*$c;
    }

    public function x_find($a,$b,$c)
    {
        if ($a ===0)
        {
            return parent::line_equation($b,$c);
        }

        $d = $this->dis($a,$b,$c);
        if ($d>0)
        {
            $sd = sqrt ($d);
            return $this->x = array((-$b-$sd)/(2*$a), (-$b+$sd)/(2*$a));
        }

        return $d===0 ? $this->x = array(-$b / (2 * $a)) : null;

    }
}


