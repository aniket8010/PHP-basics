<?php
if (isset($_POST["filename"])) {
    $filename = "files/" . $_POST["filename"];
    $content = $_POST['content'];
    $file = fopen($filename, "w") or die("unable to ceate file");
    fwrite($file, $content);
    fclose($file);
    echo "file Created";
}


?>

<form action="" method="post">
    <input type="text" name="filename" placeholder="Enter file name">
    <br>
    <br>
    <textarea name="content" id=""></textarea>
    <br>
    <br>
    <button>Create File</button>
</form>


<!-- Read File -->


<?php
// $file = "files/aniket.txt";
// $myFile = fopen($file, "r") or die("Unable to crearte file");
// echo fread($myFile, filesize($file));
// fclose($myFile);


// if (isset($_FILES['file'])) {
//     $file = $_FILES['file']['tmp_name'];
//     $myFile = fopen($file, "r") or die("Unable to crearte file");
//     echo fread($myFile, filesize($file));
//     fclose($myFile);
// }

?>
<!-- 
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <br>
    <br>
    <button>Read File</button>
</form> -->



<!-- GET LIST OF FILES  -->

<?php
// $path = "files";
// $items = scandir($path);
// $items = array_diff($items, array(".", ".."));
// foreach ($items as $item) {
//     echo "<a href=files/$item>$item</a>";
//     echo "<br>";
// }
?>