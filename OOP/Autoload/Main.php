<?php 

function autoloader($class){
    include($class.'.php');
    echo "<br>";
}
spl_autoload_register('autoloader');

$t1=new Teacher();
$s1=new Student();
$m1=new Management();
?>