<?php
/**
 * Klasa służąca do obsługi dodawanie danych z bazy danych dla tabeli buyer
 * 
 * @package Buyer
 * @subpackage Model
 */
 
require_once "{$config->APP_PATH}/config/db.php";

class BuyerModel extends Db {
	 /**
     * Tworzy kupujacego
     * array $param
     */
	function create_buyer($param){
		$sql = "INSERT INTO `buyer`
		(login,
		password,
		fname,
		lname,
		address_id,
		delivery_address_id)
		VALUES
		('{$param['login']}',
		'{$param['password']}',
		'{$param['fname']}',
		'{$param['lname']}',
		'{$param['address_id']}',
		'{$param['delivery_address_id']}'
		)";
		
		$result = $this->sql($sql);
		return $result['insert_id'];
	}
	
	function create_address($param){
		$sql = "INSERT INTO `address`
		(street,
		postal_code,
		city,
		phone)
		VALUES
		('{$param['street']}',
		'{$param['postal_code']}',
		'{$param['city']}',
		'{$param['phone']}')";
		
		$result = $this->sql($sql);
		return $result['insert_id'];
	}
	
	function get_buyer($param){
		$sql = "SELECT * FROM buyer WHERE login = '{$param['login']}' AND password = '{$param['password']}' LIMIT 1";
		
		$result = $this->sql($sql);
		return $result['result'];
	}

} 
?>
