<?php

class A 
{
}

class B extends A 
{
	public function construct($a) 
	{
		$this->a = $a;
	}

	protected $a;

}

class C extends B 
{
	public function construct($a, $b, $c)
	{
		$this->b = $b;
		$this->c = $c;
		parent:: __construct($a);
	}

	protected $b;
	protected $c;
}

$a1 = new A();
$a2 = new A();
$b4 = new B($a3);
$a3 = new A();
$c5 = new C($a1, $a2, $b4, $a3);
