<?php
// $user=["name"=>"Aniket","age"=>"21","email"=>"aniketshelke9900@gmail.com"];
// $userJson=json_encode($user);
// print_r($userJson);
// echo $userJson;

$data = '{"employees":[
  { "firstName":"John", "lastName":"Doe" },
  { "firstName":"Anna", "lastName":"Smith" },
  { "firstName":"Peter", "lastName":"Jones" }
]}';
$dataArray = json_decode($data, true);
print_r($dataArray);
