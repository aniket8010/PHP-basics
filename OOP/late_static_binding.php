<?php
class countrySale
{
    public static $TotalSale = 1000;
    function getTatalSale()
    {
        echo static::$TotalSale;
    }
    static function AreaName()
    {
        echo "Father Area";
    }
    function GetAreaName(){
       echo static::AreaName();
    }
}
class citySale extends countrySale
{
    public static $TotalSale = 500;
    static function AreaName()
    {
        echo "Child Area";
    }
}

$city = new countrySale();
$city->GetAreaName();
