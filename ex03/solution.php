<?php
	function plusMinus($arr){
		$elements = count($arr);		
		$zeros = 0;
		$negatives = 0;
		$positives = 0;

		foreach ($arr as $key => $value) {
			if( $value === 0 ) $zeros++;
			else if( $value < 0 ) $negatives++; 
			else $positives++;
		}

		echo number_format($positives/$elements, 6) . "\r\n";
		echo number_format($negatives/$elements, 6) . "\r\n";
		echo number_format($zeros/$elements, 6);

	}
