<?php
	header('Content-type: application/json');
	header("Access-Control-Allow-Origin: *");




require_once('../src/Order.php');
require_once('../src/OrderControlService.php');

$OCS = new OrderControlService();
if(isset($_GET['userName'])){
		$_SESSION['userName']=$_GET['userName'];
		}
if(isset($_GET['tema'])){
		$_SESSION['tema']=$_GET['tema'];
		}
if(isset($_GET['email'])){
		$_SESSION['email']=$_GET['email'];
		}
if(isset($_GET['mes'])){
		$_SESSION['mes']=$_GET['mes'];
		}
if(isset($_GET['date'])){
		$_SESSION['date']=$_GET['date'];
		}		
	
	$nOrder = new Order();
	$parts=explode("-", $_SESSION['date']);
$day = $parts[0];
$month = $parts[1];
$year = $parts[2];
if (strlen($month)==1){
$month = "0".$month;
}
	$sDate = $year.'-'.$month.'-'.$day; 
	echo $sDate;
	
	
	$nOrder = new Order();

		$nOrder->date = $sDate;		
		$nOrder->userName = $_SESSION['userName'];
		$nOrder->userPhone = $_SESSION['tema'];
		$nOrder->userAdress = $_SESSION['email'];		
		$nOrder->orderText = $_SESSION['mes'];
		
$OCS->addOrder($nOrder);
 echo "Order added";
?>