<?php
	function birthdayCakeCandles($ar) {

		$biggest = 0;
		$times = 1;

		foreach( $ar as $value ) {
			if($value > $biggest) { 
				$biggest = $value;
				$times = 1;
			}else if( $value === $biggest) {
				$times++;
			}
		}

		return $times;

	}
