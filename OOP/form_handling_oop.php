<form style="padding: 20px;" action="" method="post">
    <input type="text" name="user" placeholder="Enter user name">
    <br>
    <button>Click</button>
</form>

<?php 
if (isset($_POST['user'])){
class user{
    function getNam($name){
        echo "User Name is $name";
    }
}
$n=new user();
$n->getNam($_POST['user']);
}
?>