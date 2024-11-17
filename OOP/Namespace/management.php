<?php 
include('./studenr.php');
include('./teacher.php');

$sp1=new student\JoininhDetails();
$sp1->admission();
echo "<br>";
$sp2=new teacher\JoininhDetails();
$sp2->joining();

?>