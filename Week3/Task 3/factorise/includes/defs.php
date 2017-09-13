<?php
/* 
 * factors($n) returns an array of prime factors of valid integer $n. 
 * Precondition: 2 <= n <= MAHP_MAX_INT = 2^31-1.
 * Note that it is executed for its _value_ not for its _effect_.
 */
    function factors($n) {
        $factors = array(); # initialise $factors to be an empty array
        $cand = 2;      // candidates
        while ($n > 1 && $cand*$cand <= $n) {
            while ($n > 1 && $n % $cand == 0) {
                $factors[] = $cand; # append $cand to the array $factors
                $n = $n / $cand;
            }
            $cand++;
        }
        if ($n > 1) {
            $factors[] = $n; # append $n to the array $factors
        }
        return $factors;
    }

	// Save to file function  
	function writeToFile($result) {
      $fp_out = fopen("result.txt", "a"); // file open (filename, mode)
      fputs($fp_out, $result);    // or use fwrite(filename&mode, and string)
      fclose($fp_out);  // close the file stream 
	}
?>
