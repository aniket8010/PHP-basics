<?php
// include("./config.php");

// $students = $conn->prepare("select * from students ");
// $students->execute();
// $result = $students->fetchAll();

// echo "<table border='3'>";
// foreach ($result as $student) {
//     echo "<tr>
//     <td>" . htmlspecialchars($student['name']). "</td>
// //     <td>" . htmlspecialchars($student['course']). "</td>
// //     <td>" . htmlspecialchars($student['batch']) . "</td>
// //     <td>" . htmlspecialchars($student['city']) . "</td>
// //     <td>" . htmlspecialchars($student['year']). "</td>
// //     <td><form method='post'>
// //     <button name=delete value=" . $student['id'] . ">Delete</button>
// //     </form></td>
// //     </tr>";
// }
// echo "</table>";

// if (isset($_POST['delete'])) {
//     $id = $_POST['delete'];
//     $deleteStudent = $conn->prepare("delete from  students where id='$id'");

//     if ($deleteStudent->execute()) {
//         echo "Record deleted successfully";
//         header("Refresh:0");
//         exit();
//     } else {
//         "Record not deleted";
//     }
// }
