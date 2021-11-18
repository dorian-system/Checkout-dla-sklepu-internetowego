<?php
    /**
	 * Konfiguracja bazy
	 * 
	 * @package Configuration
	*/

	class Configuration {
		function __construct(){
			$this->APP_PATH = dirname(dirname(__FILE__));
		}	
		var $APP_PATH;
		var $db_host = "localhost"; //nazwa hosta
		var $db_name = ""; //database name
		var $db_user = ""; //nazwa bazy danych
		var $db_pass = ""; //dhasło użytkownika bazy danych
	}

	$config = new Configuration();
?>
