<?php
	header('Content-type: application/json');
	header("Access-Control-Allow-Origin: *");


require_once('../src/Order.php');
require_once('../src/OrderControlService.php');


$OCS = new OrderControlService();

$ordArray = array();
$ordArray = $OCS->getOrders();

$today = date("Y-m-d");


foreach ($ordArray as $prod){
	
	$parts=explode("-", $prod->date);
	$year = $parts[0];
	$month = $parts[1];
	$day = $parts[2];


$oDay = $year.'-'.$month.'-'.$day;

	if(strtotime($today)<=strtotime($oDay)){
	echo $year.'-'.(int)$month.'-'.$day.',';
	
	}
}
?>