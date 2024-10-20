<?php
class Teacher
{
    public $city = "Pune";
    function exam()
    {
        echo "Exam is on monday";
    }
    function age()
    {
        echo "My age is 21";
    }
}

class Student extends Teacher
{
    public $city = "Sambhaji Nagar";
    function age()
    {
        echo "My age is 20";
    }
}

$t1 = new Teacher();
// echo $t1->city;
// $t1->exam();
// $t1->age();

$s1 = new Student();
$s1->age();
echo "<br>";
echo $s1->city;
