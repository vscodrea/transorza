<?php
	
	function get_wording($key, $echoRez = true){
		global $wordingArray;
		if (!empty($wordingArray[$key])){
            $rez = $wordingArray[$key];
		} else {
			$rez = '';
		}		
        if ($echoRez){
            echo $rez;
        } else {
            return $rez; 
        }
	}
    
	
	function get_language_file(){
		return get_language(). '.php';
	}
    
    function get_language(){
		$host = $_SERVER['HTTP_HOST'];
		switch($host){
            case 'transorza.ro':
            case 'www.transorza.ro':    
			case  'localhost.transorza.ro' :
				return 'ro';
			break;
			case 'transorza.com':
            case 'www.transorza.com':    
			case 'localhost.transorza.com' :
				return 'en';
			break;
			case 'de.transorza.com':
            case 'www.de.transorza.com':    
			case 'localhost.de.transorza.com' :
				return 'de';
			break;
			default :
				return 'ro';
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