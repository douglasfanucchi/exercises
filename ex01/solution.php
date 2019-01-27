<?php 
	function simpleArraySum($ar) {
		return array_reduce($ar, function($store, $current){
			return $store + $current;
		});
	}
