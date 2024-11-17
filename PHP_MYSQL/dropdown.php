<?php
include("./config.php");

$getStudents = $conn->prepare("SELECt id,name from Students");
$getStudents->execute();
$studentsData = $getStudents->fetchAll();

echo "<select>";
echo "<option>Select Name</option>";
foreach ($studentsData as $student) {
    echo "<option value=" . $student['id'] . ">" . $student['name'] . "</option>";
}
echo "</select>";
