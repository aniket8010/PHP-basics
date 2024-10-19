<form action="" method="post">
    <input type="text" name="search" placeholder="search">
    <br>
    <br>
    <button>Search</button>
</form>

<?php
include("./config.php");
if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $student = $conn->prepare("select * from students where name like '$search%'");
    $student->execute();
    $result = $student->fetchAll();

    echo "<table border='3'>";
    foreach ($result as $student) {
        echo "<tr>
     <td>" . htmlspecialchars($student['name']) . "</td>
     <td>" . htmlspecialchars($student['course']) . "</td>
     <td>" . htmlspecialchars($student['batch']) . "</td>
     <td>" . htmlspecialchars($student['city']) . "</td>
     <td>" . htmlspecialchars($student['year']) . "</td>
     <td><form method='post'>
     <button name=delete value=" . $student['id'] . ">Delete</button>
     </form></td>
     <td><a href='update.php?id=" . $student['id'] . "'>Edit</td>
       </tr>";
    }
    echo "</table>";
}

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $deleteStudent = $conn->prepare("delete from  students where id='$id'");

    if ($deleteStudent->execute()) {
        echo "Record deleted successfully";
        header("");
        // exit();
    } else {
        "Record not deleted";
    }
}

?>