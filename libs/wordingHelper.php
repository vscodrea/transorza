<?php
	include_once "../wordings/ro.php";

	function get_wording($key){
	
	var_dump($wordingArray);
	echo $key;
		if (!empty($wordingArray[$key])){
			echo $wordingArray[$key];
		}
		echo '';
	
	}
?>