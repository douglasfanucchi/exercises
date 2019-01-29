<?php
	function staircase($n) {

	    for( $i = 1; $i <= $n; $i++) {
	        $sharps = '';

	        for( $j = 1; $j <= $i; $j++ ) {
	            $sharps .= '#';
	        }

	        for( $k = $n - strlen($sharps); $k >= 1; $k-- ) {
	            echo ' ';
	        }

	        echo $sharps;

	        echo "\r\n";
	    }
	}
