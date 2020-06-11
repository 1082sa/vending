<?php if (!isset($_SESSION['account'])) {
        header("location:login.php");
    } else {
        $account = $_SESSION['account'];
    }
?>