<?php
class Properties
{
    public $name = "Aniket Shelke";
    function getName()
    {
        echo $this->name;
    }
    function updateName($name){
        echo $this->name=$name;
    }
}

$sp1=new Properties();
$sp1->getName();
echo "<br>";
$sp1->updateName("Araj");
