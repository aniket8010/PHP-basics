<?php 
trait parentcompany1{
    function employ(){
        echo "empoly:1";
    }
}
trait parentcompany2{
    function employ(){
        echo "empoly:2";
    }
}

class childCompany{
    use parentcompany1;
    use parentcompany2{
        parentcompany1::employ insteadof parentcompany2;
        parentcompany2::employ as employ2;
    }

    // function employ()
    // {
    //     echo "employ:3";
    // }
}

$ch= new childCompany();
$ch->employ();
echo "<br>";
$ch->employ2();
?>