<?php
/**
 * Obsługuje akcje zamowien
 * 
 * @package Order
 * @subpackage Controller
 */
 
require_once "../config/config.php";
require_once"{$config->APP_PATH}/models/OrderModel.php";
require_once"{$config->APP_PATH}/models/BuyerModel.php";

class OrderDynamicController extends Configuration{
	
	public function __construct($param)
	{
		
		$this->order_modal = new OrderModel();
		$this->buyer_modal = new BuyerModel();
		
		if($param['set_order'])
		{
			echo $this->set_order($param);
		}
		else
		{
			echo "Nie ma takiego postu";
		}
	}
	
	/**
     * Czyszczenie zmiennej $_POST
	*/
	function clean_data($str){
		$str = str_replace('"', '\"', $str);
		$str = str_replace("'", "\'", $str);
		return $str;
	}
	/**
     * Przesyła dane z formularza POST do bazy
     * /admin/content
	*/
	function set_order($param){
		foreach($param as $key=>$value){
			$aux_post[$key] = $this->clean_data($value);		
		}
		
		if ($aux_post['buyer_id'] == 0 && $aux_post['new_buyer'] == null){
			return json_encode(array("warning"=>"Zaloguje sie lub stwórz nowe konto"));
		}
		
		if($aux_post["buyer_id"] == 0){
			$buyer_address = array(
					"street"=>$aux_post['buyer_street'],
					"postal_code"=>$aux_post['buyer_postal_code'],
					"city"=>$aux_post['buyer_city'],
					"phone"=>$aux_post['buyer_phone']
			);
			$aux_post['address_id'] = $this->buyer_modal->create_address($buyer_address);
			
			if($aux_post['delivery_street'] != null){
				$delivery_address = array(
					"street"=>$aux_post['delivery_street'],
					"postal_code"=>$aux_post['delivery_postal_code'],
					"city"=>$aux_post['delivery_city'],
					"phone"=>$aux_post['delivery_phone']
				);
				$aux_post['delivery_address_id'] = $this->buyer_modal->create_address($delivery_address);
			}else{
				$aux_post['delivery_address_id'] = $aux_post['address_id'];
			}
			
			$aux_post["buyer_id"] = $this->buyer_modal->create_buyer($aux_post);
			print_r($aux_post['payment_id']);
		}
		
		$id = $this->order_modal->create_order($aux_post);
		
		return json_encode(array("order_id"=>$id));
		
	}
	
}

new OrderDynamicController($_POST);
?>
