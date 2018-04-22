<?php
require "conf.php";
$response= array();
$s_id = $_POST['s_id'];
$mysql_qry="SELECT * FROM banners where s_id=$s_id ;";
$result = mysqli_query($conn, $mysql_qry);
$value = "null";


$rows = array();
while($r = mysqli_fetch_assoc($result)) {
  $rows[] = $r;
}


echo json_encode($rows);
mysqli_close($conn);
?>