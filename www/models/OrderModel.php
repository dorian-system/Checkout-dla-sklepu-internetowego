<?php
/**
 * Klasa służąca do obsługi dodawanie danych z bazy danych dla tabeli order
 * 
 * @package Order
 * @subpackage Model
 */
 
require_once "{$config->APP_PATH}/config/db.php";

class OrderModel extends Db {
	 /**
     * Tworzy zamowienie
     * array $post
     */
	function create_order($param){
		$sql = "INSERT INTO `order`
		(buyer_id,
		buyer_note,
		payment_id,
		delivery_id,
		amount,
		date)
		VALUES
		('{$param['buyer_id']}',
		'{$param['buyer_note']}',
		'{$param['paymentMethod']}',
		'{$param['deliveryMethod']}',
		'{$param['amount']}',
		NOW()
		)";
		
		
		$result = $this->sql($sql);
		return $result['insert_id'];
	}
} 
?>
