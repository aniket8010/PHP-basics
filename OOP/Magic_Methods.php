<!-- Invoke Magic Mthod  -->

<?php
// class user
// {
//     function __invoke()
//     {
//         echo "Invoke function called by object as a function ";
//     }
//     function otherFunction()
//     {
//         echo "Other function for testing purpose only";
//     }
// }

// $user = new user();
// $user();
// echo "<br>";
// $user->otherFunction();
?>

<!-- Get Magic Method  -->

<?php
// class Stu {
//     public $name="Aniket Shelke";
//     // private $age=21;

//     function __get($property){
//         echo "$property does not exit";
//     }
// }

// $student=new Stu();
// echo $student->names; 
?>

<!-- Set Magic Method  -->

<?php
// class user1
// {
//     private $name = "Aniket";
//     function __set($property, $value)
//     {
//         if (property_exists($this, $property)) {
//             $this->$property = $value;
//         } else {
//             echo "NO";
//         }

//         // echo "$property can not set with $value as this property does not exits";
//     }
//     function getName()
//     {
//         echo $this->name;
//     }
// }

// $user1 = new user1();
// $user1->getName();
// echo "<br>";
// $user1->name = "Aniket Shelke";
// $user1->getName();

?>

<!-- Call Magic Method  -->

<?php
// class user2
// {
//     private function getName($name){
//         echo $name;
//     }
//     function __call($method, $args)
//     {
//         // echo "$method method is not found";
//         // echo "<br>";
//         // print_r($args);
//         if(method_exists($this,$method)){
//             // echo "$method is a private method";
//             call_user_func_array([$this,$method],$args);
//         }else{
//             echo "$method method not found";
//         }
//     }
// }

// $user2 = new user2();
// $user2->getName("Aniket Vitthal Shelke");
?>

