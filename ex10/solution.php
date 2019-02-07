<?php 
	function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
		$applesCount  = 0;
		$orangesCount = 0;

		foreach ($apples as $apple) {
			if ( $apple < 0) continue;

			if( $apple + $a >= $s && $apple + $a <= $t ) $applesCount++;
		}

		foreach ($oranges as $orange) {
			if ( $orange > -1 ) continue;

			if ( $orange + $b <= $t && $orange + $b >= $s ) $orangesCount++; 
		}

		echo $applesCount . "\r\n" . $orangesCount;
	}
