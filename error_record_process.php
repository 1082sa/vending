<?php


  $sql="SELECT ROW_NUMBER() OVER(ORDER BY Date(error_date)DESC) AS ROWID ,ven_num,error_words, Date(error_date)as error_date,finish FROM `error`";
  $sth = $conn->query($sql);


?>