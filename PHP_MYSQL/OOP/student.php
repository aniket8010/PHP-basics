<?php
include('./config.php');

class Student
{
    public $DBname;
    function __construct($conn)
    {
        $this->DBname = $conn;
    }
    function getData()
    {
        $getStudentData = $this->DBname->prepare("select * from students");
        $getStudentData->execute();
        $result = $getStudentData->fetchAll();
        echo "<pre>";
        print_r($result);
        echo "</pre>";
    }
    function insertData()
    {
        $sqlquery = "insert into students (`id`,`name`,`course`,`batch`,`city`,`year`) values
        (null,'bruce','MBA','Morinig','jalna','2005')";
        $student = $this->DBname->prepare($sqlquery);
        $result = $student->execute();
        if ($result) {
            echo "Data inserted successful";
        } else {
            echo "Operation Failed";
        }
    }
    function updateData()
    {
        $sqlquery = "update students set name='tony',course='b.Tech',batch='evening',year='3rd',city='Pune'
         where id=49";
        $student = $this->DBname->prepare($sqlquery);
        $result = $student->execute();
        if ($result) {
            echo "Data updated successful";
        } else {
            echo "Operation Failed";
        }
    }
    function deleteData()
    {
        $sqlquery = "delete from students where id=48";
        $student = $this->DBname->prepare($sqlquery);
        $result = $student->execute();
        if ($result) {
            echo "Data updated successful";
        } else {
            echo "Operation Failed";
        }
    }


    function insertDataWithRequest($request)
    {
        $name = $request['name'];
        $course = $request['course'];
        $batch = $request['batch'];
        $city = $request['city'];
        $year = $request['year'];
        $sqlquery = "insert into students (`id`,`name`,`course`,`batch`,`city`,`year`) values
        (null,'$name','$course','$batch','$city',' $year')";
        $student = $this->DBname->prepare($sqlquery);
        $result = $student->execute();
        if ($result) {
            echo "Data inserted successful";
        } else {
            echo "Operation Failed";
        }
    }
}

$student = new Student($conn);
// $student->getData();
// $student->insertData();
// $student->updateData();
// $student->deleteData();

if (isset($_POST['name'])) {
    $student->insertDataWithRequest($_POST);
}
