<?php

if (isset($_POST['name'])) {
    echo "User Name = " . $_POST['name'];
    echo "<br/>";
    echo "Email = " . $_POST['email'];
    echo "<br/>";
    echo "Password = " . $_POST['password'];
    echo "<br/>";
    echo "Skills = " . implode(",", $_POST['skills']);
    echo "<br/>";
    echo "Gender = " . $_POST['gender'];
    echo "<br/>";
    echo "City = " . $_POST['city'];
    echo "<br/>";
    echo "Message = " . $_POST['bio'];
    echo "<br/>";
}
