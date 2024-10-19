<?php
class ConstructorDemo
{
    public $name;
    function __construct($name)
    {
        echo $this->name = $name;
    }
}

$constructor = new ConstructorDemo("Araj");
