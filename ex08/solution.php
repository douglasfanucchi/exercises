<?php 
	function breakingRecords($scores) {
		$higher        = $scores[0];
		$lower         = $scores[0];
		$breakForHigh  = 0;
		$breakForLower = 0;

		for( $i = 1; $i < count($scores); $i++ ) {
			if( $higher < $scores[$i] ) {
				$higher = $scores[$i];
				$breakForHigh++;
			}
		}

		for( $i = 0; $i < count($scores); $i++ ) {
			if( $lower > $scores[$i] ){
				$lower = $scores[$i];
				$breakForLower++;
			} 
		}

		return [$breakForHigh, $breakForLower];
	}
