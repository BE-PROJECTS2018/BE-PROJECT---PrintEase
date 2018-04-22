<?php
require "conf.php";
$sid=$_POST["bw_sid"];
$quantity = $_POST["bw_quantity"];
$price = $_POST["bw_price"];


$response = array();

	$mysql_qry = "insert into `BlackWhite` values(".$sid." ,'".$size."',".$quantity.",".$price.")";
	$result = mysqli_query($conn, $mysql_qry);
	$code = "Deatils have been updated!!";
	$message = "Your details will be sent to shopkeeper shortly!!";

$response['code']=$code;
$response['message']=$message;
echo json_encode($response);
mysqli_close($conn);

?>