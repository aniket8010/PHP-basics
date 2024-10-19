<?php
class Auth{
    function login($userType){
        echo "$userType login";
        echo "<br>";
    }
}
class Student extends Auth
{
    function lo()
    {
        echo "Lo is successfuly printed ";
    } 
}

class Teacher extends Auth
{
    // function login()
    // {
    //     echo "Teacher log in";
    // }
}

$in = new Student();
$in->login("Student");
$in->lo();

echo "<br>";
$in = new Teacher();
$in->login("Teacher");
