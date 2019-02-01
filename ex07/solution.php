<?php
	function gradingStudents($grades) {
		$finalgrades = [];
	 	foreach ($grades as $grade) {
	 		if($grade > 100 || $grade < 0) continue; 

	 		if($grade < 38 || $grade % 5 === 0) {
	 			$finalgrades[] = $grade;
	 			continue;
	 		}

		 	$next5Multiple = $grade;

		 	while( $next5Multiple % 5 !== 0 ) $next5Multiple++;
		 	$finalgrades[] = $next5Multiple - $grade < 3 ? $next5Multiple : $grade;
	 	}

	 	return $finalgrades;
	}
