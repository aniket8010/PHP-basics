<?php
abstract class Car
{
    abstract function carName();
    abstract function carEngin();
    abstract function carSpeed();
}

class Cars extends Car
{
    function carName()
    {
        echo "Toyota";
    }
    function carEngin()
    {
        echo "Engin is ready";
    }
    function carSpeed()
    {
        echo "50 to 60 km/h";
    }
}

$cars=new Cars();
$cars->carName();
echo "<br>";
$cars->carEngin();
echo "<br>";
$cars->carSpeed();
