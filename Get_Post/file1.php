<?php
if (isset($_FILES['image'])) {
    // echo "<pre>";
    // print_r($_FILES);
    // echo "</pre>";

    $file_name = $_FILES['image']['name'];
    $file_path = $_FILES['image']['full_path'];
    $file_type = $_FILES['image']['type'];
    $file_temp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];


    if (move_uploaded_file($file_temp, "UploadedFiles/" . $file_name)) {
        echo "<h2 style='color: green'>Successfully Uploaded</h2>";
    } else {
        echo "<h3 style='color: red'>Could not uplodede the file</h3>";
    }
}
?>



<html>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <br>
        <input type="submit">
    </form>
</body>

</html>