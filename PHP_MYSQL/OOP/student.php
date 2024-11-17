<?php 
include('./config.php');

class Student{
    public $DBname;
    function __construct($conn){
        $this->DBname=$conn;
    }
    function getData(){
        $getStudentData=$this->DBname->prepare("select * from students");
        $getStudentData->execute();
        $result=$getStudentData->fetchAll();
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
}

$student=new Student($conn);
$student->getData();
?>