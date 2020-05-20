<? 
require 'db.php';
//$keyword = $_GET["searching_keyword"];


  $statement = $conn->query("SELECT distinct sort.pro_name ,picture.pro_pic  FROM `sort`,`picture` ,`information`
WHERE sort.pro_name or sort.sort_name LIKE'綠茶'
and sort.pro_name= information.pro_name AND
sort.pro_name=picture.pro_name");



?>
