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
		var $db_name = "01357044_ch"; //database name
		var $db_user = "01357044_ch"; //nazwa bazy danych
		var $db_pass = "V;7mNPNN&tv1"; //dhasło użytkownika bazy danych
	}

	$config = new Configuration();
?>
