<?php
class constantDemo
{
    const collegeName = "Shivchhatrapati College Chhatrapati Sambhaji Nagar";
    function getCollegeName()
    {
        echo constantDemo::collegeName;
        echo "</br>";
        echo self::collegeName;
    }
}

// echo constantDemo::collegeName;
$c1 = new constantDemo();
$c1->getCollegeName(); 
