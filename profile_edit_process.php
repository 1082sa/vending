<?php
require 'db.php';

$name= $_POST['name'];
$gender = $_POST['gender'];
$job = $_POST['job'];

echo $name;
echo $gender;
echo $job;



$conn->exec("UPDATE `user` SET  `name` = '$name', `gender` = '$gender' , `job` = '$job' WHERE `user`.`account` = '$account';");

 header("location:profile.php");



?>
