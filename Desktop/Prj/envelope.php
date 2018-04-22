<?php
require "conf.php";
$sid=$_POST["e_sid"];
$size = $_POST["e_size"];
$quantity = $_POST["e_quantity"];
$price = $_POST["e_price"];


$response = array();

	$mysql_qry = "insert into `envelope` values(".$sid." ,'".$size."',".$quantity.",".$price.")";
	$result = mysqli_query($conn, $mysql_qry);
	$code = "Deatils have been updated!!";
	$message = "Your details will be sent to shopkeeper shortly!!";

$response['code']=$code;
$response['message']=$message;
echo json_encode($response);
mysqli_close($conn);

?>