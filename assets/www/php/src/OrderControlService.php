<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('Order.php');

class OrderControlService
{
		private $connect = null;		
		function __construct() 
		{		
		//echo 'connecting';
			$this->connect = mysql_connect('localhost','innovate_lol','q1w2e3r4');
	
		if(!$this->connect){
			echo 'connect faild';
	    	die(mysql_error());
		}
         if(!mysql_select_db('innovate_wrdpress', $this->connect))
         {
         	echo 'connect faild 2';
	     	die(mysql_error($this->connect ));
         }
		 
		}
		
		
	public function getOrders(){
			
			
			$src ="SELECT *	FROM `Order` ORDER BY `Order`.`date` DESC;";						
							
			$result = mysql_query($src);	
			
			$orderArray = array();		
			
			$num_rows = mysql_num_rows($result);
			
			
			if($num_rows > 0){
			while($row = mysql_fetch_assoc($result))
				{
					$order = new  Order();
					
					$order->addOrder($row['id'], 
									$row['date'], 
									$row['userName'], 
									$row['userPhone'], 
									$row['userAdress'], 
									$row['orderText']); 	 	
					
					$orderArray[]=$order;
				}
			}
		return $orderArray;
		}
		
		public function getOrdersById($cId){
						
			$src ="SELECT *	FROM `Order` WHERE `Order`.`id`='".$cId."';";						
			$result = mysql_query($src);						
						
			$row = mysql_fetch_assoc($result);
							
				$order = new  Order();
				$order->addOrder($row['id'], 
								$row['date'], 
								$row['userName'], 
								$row['userPhone'], 
								$row['userAdress'], 
								$row['orderText']); 	 	
		return $order;
		}
		
	public function addOrder(Order $ord)
		{
		
			$str = "INSERT INTO `innovate_wrdpress`.`Order` (`id`, `date`, `userName`, `userPhone`, `userAdress`, `orderText`) 
				VALUES (NULL, '".$ord->date." ', '".$ord->userName."', '".$ord->userPhone."', '".$ord->userAdress."', '".$ord->orderText."');";
			
			mysql_query("SET NAMES 'utf8_general_ci'");
			mysql_query($str);

		return true;
		}
		
		public function getLastInsertOrder( )
		{
			return mysql_insert_id();
		}
};		
?>