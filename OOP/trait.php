<?php 
trait ParentCompany1{
    function employe(){
        echo "100";
    }
    function worker(){
        echo "20";
    }
}
trait ParentCompany2{
    function Offices(){
        echo "10";
    }
}

class child {
    use ParentCompany1;
    use ParentCompany2;
}

$cm=new child();
$cm->employe();
echo "<br>";
$cm->Offices();
echo "<br>";
$cm->worker();
?>