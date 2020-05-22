<?php 
require 'db.php';
$keyword = $_POST["searching_keyword"];


  $statement = $conn->query("SELECT distinct sort.pro_name ,picture.pro_pic  FROM `sort`,`picture` ,`information`
WHERE (sort.pro_name LIKE'%$keyword%' or sort.sort_name LIKE'%$keyword%')
and sort.pro_name= information.pro_name AND
sort.pro_name=picture.pro_name");



?>
