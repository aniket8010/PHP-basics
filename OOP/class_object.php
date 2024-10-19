<?php
class MathOperations
{
    function sum($a, $b)
    {
        echo $a + $b;
    }
    public $num =10 ;
    function multi($a, $b)
    {
        echo $a * $b *$this->num;
    }
}

$maths = new MathOperations();

$maths->sum(20, 30);
echo "<br>";
$maths->sum(70, 30);

$maths1 = new MathOperations();
echo "<br>";
$maths1->multi(10, 20);
