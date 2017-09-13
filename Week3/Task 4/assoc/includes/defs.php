<?php
/* Functions for PM database example. */

/* Load sample data, an array of associative arrays. */
include "pms.php";

/* Search sample data for $name or $year or $state from form. */
	function search($query) {
	    global $pms; 
	    
	    if(!empty($query)) {
	    	$results = array();	// Declare a empty array
	    	foreach ($pms as $pm) {
	    		if (stripos($pm['name'], $query) !== FALSE || // stripos - case insensitive (if may some characters is part of string in the search resutl)
	    			stripos($pm['from'], $query) !== FALSE || // strpos - case sensitive
	    			stripos($pm['to'], $query) !== FALSE || 
	    			stripos($pm['state'], $query) !== FALSE) {
	    			$results[] = $pm; // add the pm object to the last element of array($results)
	    		}
	    	}
	    }
	    return $results;
	}
	    
	
	//     // Filter $pms by $name
	//     if (!empty($name)) {
	// 		$results = array();
	// 		foreach ($pms as $pm) {
	// 	    	if (stripos($pm['name'], $name) !== FALSE) {	// compare the position of each character of string
	// 			$results[] = $pm;
	// 	    	}
	// 		}
	// 		$pms = $results;
	//     }
	
	//     // Filter $pms by $year
	//     if (!empty($year)) {
	// 		$results = array();
	// 		foreach ($pms as $pm) {
	// 	    	if (strpos($pm['from'], $year) !== FALSE || 
	// 	        	strpos($pm['to'], $year) !== FALSE) {
	// 				$results[] = $pm;
	// 	    	}
	// 		}
	// 		$pms = $results;
	//     }
	
	//     // Filter $pms by $state
	//     if (!empty($state)) {
	// 		$results = array();
	// 		foreach ($pms as $pm) {
	// 	    	if (stripos($pm['state'], $state) !== FALSE) {
	// 				$results[] = $pm;
	// 	    	}
	// 		}
	// 		$pms = $results;
	//     }
	
	//     return $pms;
	// }
?>
