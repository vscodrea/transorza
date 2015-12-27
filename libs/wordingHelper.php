<?php
	include_once dirname(dirname(__FILE__)) . '/wordings/ro.php';

	function get_wording($key){
		 global $wordingArray;
		if (!empty($wordingArray[$key])){
			echo $wordingArray[$key];
		} else {
			echo '';
		}		
	
	}
?>