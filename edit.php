<?
  require 'db.php';
session_start();
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];

//$conn->exec('INSERT INTO user(account,password,name,gender,job) VALUES ("happyy@gmail.com","123","蔡蔡","女","學生")');

//$conn->exec('UPDATE `user` SET `name` = "蔡狗狗" WHERE `user`.`account` = "happyy@gmail.com"');

$statement = $conn->query('select * from user where account="happyy@gmail.com"');

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

