<?php
ini_set('display_errors',1);
error_reporting(E_ALL);


require_once('../src/Order.php');
require_once('../src/OrderControlService.php');
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

</head>
<body>

 

<?php
$OCS = new OrderControlService();

$ordArray = array();
$ordArray = $OCS->getOrders();

function VievStatus($st){
 
$str = 'null';
if ($st=='1'&&$st=='0') {$str= 'WAITING';}
if ($st=='2'){ $str=  'ALLOW'; }
if ($st=='3') {$str=  'DENY';}
return $str;
}

echo '<table border="1">';
foreach ($ordArray as $prod){
echo '<tr>';
	echo '<td>'.$prod->id .' </td>';
	echo '<td>'.$prod->date .' </td>';
	echo '<td>'.$prod->userName .' </td>';
	echo '<td>'.$prod->userPhone .' </td>';
	echo '<td>'.$prod->userAdress .' </td>';
	echo '<td>'.$prod->orderText .' </td>';
echo '</tr>';

}
echo '</table>';
?>	


</body>


</html>