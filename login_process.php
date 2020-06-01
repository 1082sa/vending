<?php
session_start();

require 'db.php';
$account = $_POST["account"];
$password = $_POST["password"];

if( !isset($_POST['account']) || !isset($_POST['password']) || $_POST['account']=="" || $_POST['password']=="" ){
	header("location:login.php");
	}
else{
$sql = "SELECT * FROM `user` WHERE( `account` = ? AND `password` = ? )";
$sth = $conn->prepare($sql);
$sth->execute(array($account, $password));
$result = $sth->fetch(PDO::FETCH_OBJ);
	
	
	
if( $result ) {
	$_SESSION['LoginSuccess'] = true;
header("location:index.html"); 
}
else {
	header("Location: login.php?msg=error");
}

}
?>

