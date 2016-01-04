<?php
	
	function get_wording($key){
		 global $wordingArray;
		if (!empty($wordingArray[$key])){
			echo $wordingArray[$key];
		} else {
			echo '';
		}		
	
	}
	
	function get_language_file(){
		$host = $_SERVER['HTTP_HOST'];
		switch($host){
			case 'transorza.ro' :
				return 'ro.php';
			break;
			case 'transorza.com' :
				return 'en.php';
			break;
			case 'de.transorza.com' :
				return 'de.php';
			break;
			default :
				return 'ro.php';
		};
	}
	
	function include_language_file(){
		$lang_file  = dirname(dirname(__FILE__)) . '/wordings/' . get_language_file();
		if (file_exists($lang_file) )
			include_once $lang_file;
		else 
			include_once dirname(dirname(__FILE__)) . '/wordings/ro.php';
	}
	
	
?>