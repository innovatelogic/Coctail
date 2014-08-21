<?php
class Order
{	
	public $id;
	public $date;
	public $userName;
	public $userPhone;
	public $userAdress;
	public $orderText;
	

	function addOrder($id, $date, $userName, $userPhone, $userAdress, $orderText)
	{

		$this->id = $id;
		$this->date = $date;
		$this->userName = $userName;
		$this->userPhone = $userPhone;
		$this->userAdress = $userAdress;
		$this->orderText = $orderText;
	 
	}
} 


?>