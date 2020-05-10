<?php

require 'db.php';

//register new User 
if (!empty($_POST)) {

    // =============================================================================
    // = 處理送來的表單資料
    // =============================================================================
	
    $uAccount = $_POST["account"] ?? "";
    $uPassword = $_POST["password"] ?? "";
    $uName = $_POST["name"] ?? "";
   $uGender = $_POST["gender"] ?? "";
    $uJob = $_POST["job"] ?? "";
    

    /* =============================================================================
     * = 確認帳號是否存在
     * =============================================================================
    **/
	function findUserByAccount($conn, $account)
{
	$sql="select * from user where account = :account";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':account', $account);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
}

function createUser($conn, $data = [])
{
	$sql="insert into user (account,password,name,gender,job) values (:account, :password, :name, :gender,:job)";
    $stmt = $conn->prepare($sql);
    
    //新建的使用者資料陣列 
    $addUserData = [
        'account' => $data['account'],
        'password'=> $data['password'],
        'name'    => $data['name'],
        'gender'  => $data['gender'],
        'job'     => $data['job'],
    ];
    //綁定新建欄位變數
    
    return $stmt->execute($addUserData);//回傳 新建資料的結果(true or false)
}

    $user = findUserByAccount($conn, $uAccount);

    if ($user) {
        header("Location:registration.html?msg=使用者已存在");
        die;
    }

    /* =============================================================================
     * = 新增使用者
     * =============================================================================
    **/

    $addResult = createUser($conn, [
        'account' => $uAccount,
        'password'=> $uPassword,
        'name' => $uName,
        'gender' => $uGender,
        'job' => $uJob,
    ]);

    // 跳轉並將結果帶回註冊頁面。
   header("Location:registration.html?result=" . $addResult);
   die();
}
