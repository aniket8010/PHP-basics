<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP First Program</title>
</head>
<body>
    <h1>This is PHP Language</h1>
    <h1>and I am Eager to learn this language</h1>
    <?php
       echo "My name is Aniket";
       
       $variable1=5;
       echo "<br>";
       $variable2=2;
       echo "<br>";
    // echo  "The addition of var 1 and 2 is ";
    // echo  $variable1+$variable2;
    // echo "<br>";
    // echo  "The sub of var 1 and 2 is ";
    // echo  $variable1- $variable2;
    // echo "<br>";
    // echo  "The mul of var 1 and 2 is ";
    // echo  $variable1*$variable2;
    // echo "<br>";
    // echo  "The division of var 1 and 2 is ";
    // echo  $variable1/$variable2;
    // echo "<br>";
    echo "The value of 1==4 is";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1!=4 is";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1<=4 is";
    echo var_dump(1<=4);
    echo "<br>";
    echo "The value of 1>=4 is";
    echo var_dump(1>=4);
    echo "<br>";

    // Increament and decrement 

    // echo $variable1++;
    // echo $variable2--;
    // echo ++$variable1;
    // echo --$variable2;
    // echo $variable2;


    echo "<br> Data types <br>";
    $var ="This is a string <br>";
    echo var_dump($var);
    echo "<br>";
    $var = 74 ;
    echo var_dump($var);
    echo "<br>";
    $var = 56.8;
    echo var_dump($var);
    echo "<br>";
    $var = true ;
    echo var_dump($var);
    echo "<br>";
    $var = [1,2,3,] ;
    echo var_dump($var);
    echo "<br>";
    echo var_dump($var);
    echo "<br>";
    ?>

</body>
</html>