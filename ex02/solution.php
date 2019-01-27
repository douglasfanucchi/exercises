<?php
	function diagonalDifference($arr) {
		$ltrDiagonal = [];
		$rtlDiagonal = [];

		for( $i = 0; $i < count($arr); $i++ ) {
			for( $j = 0; $j < count($arr[$i]); $j++ ) {
				if( $j === $i) $ltrDiagonal[] = $arr[$i][$j];
			}
		}

		for( $i = 0; $i < count($arr); $i++ ) {
			for( $j = 0; $j < count($arr[$i]); $j++ ) {
				if($j === count($arr) - 1 - $i) $rtlDiagonal[] = $arr[$i][$j];
			}
		}

		$v1 = array_reduce($ltrDiagonal, function($store, $current) {
			return $store + $current;
		});

		$v2 = array_reduce($rtlDiagonal, function($store, $current) {
			return $store + $current;
		});

		return abs($v1 - $v2);
	}
