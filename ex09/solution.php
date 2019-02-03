<?php 
	function timeConversion($s) {
		$default = [12, 00, 00];


		if( ( strpos($s, 'PM') !== false && strpos($s, '12') !== 0 ) || (strpos($s, 'AM') !== false && strpos($s, '12') === 0 ) ){
			
			if(strpos($s, 'PM') !== false) $strpos = strpos($s, 'PM');
			else $strpos = strpos($s, 'AM');

			$time = explode( ':', substr($s, 0, $strpos) );

			for( $i = 0; $i < count($time); $i++ ) {
				$time[$i] += $default[$i];

				if( $time[$i] < 10 ) $time[$i] = '0' . (string) $time[$i];
			}

			if( (int) $time[0] === 24 ) $time[0] = '00'; 

			$time = implode(':', $time);

			return $time;
		}

		$strpos = strpos($s, 'AM') !== false ? strpos($s, 'AM') : strpos($s, 'PM');

		return substr($s, 0, $strpos);
	}
