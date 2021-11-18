<?php

/**
 * Obsługuje akcje logowanie
 * 
 * @package Login
 * @subpackage Controller
 */
 
require_once "../config/config.php";
require_once"{$config->APP_PATH}/models/BuyerModel.php";

class LoginDynamicController extends Configuration {
	
	public function __construct($param)
	{
		$this->buyer_modal = new BuyerModel();
		
		if($param['login'])
		{
			echo $this->login($param);
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
     * Logowanie
	*/
	function login($param){
		foreach($param as $key=>$value){
			$aux_post[$key] = $this->clean_data($value);		
		}
		
		$buyer = mysqli_fetch_assoc($this->buyer_modal->get_buyer($aux_post));
		if($buyer){
			return json_encode($buyer);
		}else{
			return json_encode(array());
		}
		
	}
	
}

new LoginDynamicController($_POST);

?>