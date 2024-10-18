<?php
// USING MYSQLI CLASS 
use LDAP\Result;

// $host = "localhost";
// $username = "root";
// $password = null;
// $database = "college";

// $conn = new mysqli($host, $username, $password, $database);
// if ($conn->connect_error) {
//     die("Some error ocure" . $conn->connect_error);
// }
// echo "connection success";
// echo "<br/>";
// $result = $conn->query("show tables ")->fetch_all();
// print_r($result);

?>

<!-- USING PDO  -->

<?php

// $host = "localhost";
// $username = "root";
// $password = null;

// try {
//     $conn = new PDO("mysql:$host;dbname=college", $username, $password);
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "connection successful";
// } catch (PDOException $err) {
//     echo "connection failed $err->$ getMessage()";
// }

// echo "<br/>";

// $result = $conn->query("show tables");
// while ($row = $result->fetch(PDO::FETCH_NUM)) {
//     print_r($row);
// }
?>