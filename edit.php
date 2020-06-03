

<?
  require 'db.php';

$password1 = $_POST['password1'];
$password2 = $_POST['password2'];


$statement = $conn->query("select * from user where account='$account'");

foreach($statement as $row){
    $realpassword=$row['password'];
}


if ($password1==$realpassword){
    $conn->exec('UPDATE `user` SET `password` = '.$password2.' WHERE `user`.`account` = "happyy@gmail.com"');
    header("location:profile.php?situation=complete");
}
else{
header("location:edit-password.php?situation=wrongpassword");
}


//讀出所有資訊->判斷密碼是否相同->沒有不同存入

?>

