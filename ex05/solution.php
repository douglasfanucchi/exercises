<?php
	function miniMaxSum($arr) {
		
		$miniSumArr = $arr;
		$maxSumArr = $arr;

		$miniSum = 0;
		$maxSum = 0;

		for( $i = 0; $i < count($arr); $i++ ) {
			for( $j = $i; $j < count($arr); $j++ ) {
				
				if( $miniSumArr[$i] > $miniSumArr[$j] ) {
					$aux            = $miniSumArr[$i];
					$miniSumArr[$i] = $miniSumArr[$j];
					$miniSumArr[$j] = $aux;
				}

			}
		}

		for( $k = count($arr) - 1; $k > -1; $k-- ) {
			for( $l = $k; $l > -1; $l-- ){
				if( $maxSumArr[$k] > $maxSumArr[$l] ) {
					$aux           = $maxSumArr[$k];
					$maxSumArr[$k] = $maxSumArr[$l];
					$maxSumArr[$l] = $aux;
				}
			}
		}

		for( $i = 0; $i < count($arr) - 1; $i++ ) {
			$miniSum += $miniSumArr[$i];
		}

		for( $i = 0; $i < count($arr) - 1; $i++ ){
			$maxSum += $maxSumArr[$i];
		}

		echo $miniSum . ' ' . $maxSum;
	}
