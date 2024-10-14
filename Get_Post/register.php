<?php 

$_REQUEST["dummky"]="test";

foreach($_REQUEST as $key => $data){
    echo $key ." is ". $data;
    echo "<br>";
}
?>