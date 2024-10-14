<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calling Function</title>
</head>
<body>
    <form action="" method="get">
        <button name="btn" value="Button">Call Function</button>
    </form>
</body>
</html>

<?php 
if(isset($_REQUEST['btn'])){
    btn_click_function();
}

function btn_click_function(){
    echo "<h2 style='color: green'>Function called on button click</h2>";
}
?>