<?php
class C
{

}

class B extends C
{
	public $a1;
	
	function __construct($a)
	{
		$this->$a1=$a;
	}
}

class A extends B
{
	public $b1;



	function __construct($b,$c)
	{
		$this->$b1=$b;
		parent::__construct($c);
	}

}

$d = new C();

$dd1 = new B($d);
$dd3 = new B($d);
$dd2 = new B($dd3);

$ddd = new A($dd1,$dd2);
?>