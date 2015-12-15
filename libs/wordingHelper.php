<?php
	include_once dirname(dirname(__FILE__)) . '/wordings/ro.php';

	function get_wording($key){
	
	//var_dump($wordingArray);
	//echo $key;
		if (!empty($wordingArray[$key])){
			echo $wordingArray[$key];
		}
		echo '';
	
	}
?>