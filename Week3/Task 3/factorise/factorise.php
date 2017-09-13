<?php
/*
 * Script to print the prime factors of a single positive integer
 * sent from a form.
 * BAD STYLE: Does not use templates.
 */
include "includes/defs.php";

# Set $number to the value entered in the form.
$number = $_GET['number'];
$error = "";  //declare emtpy string

# Check $number is nonempty, numeric and between 2 and PHP_MAX_INT = 2^31-1.
# (PHP makes it difficult to do this naturally; see the manual.)
if (empty($number)) {   // if the number is empty
    $error = "Error: Missing value\n";
} else if (!is_numeric($number)) {
    $error = "Error: Nonnumeric value: $number\n";

} else if ($number < 2 || $number != strval(intval($number))) {
    $error = "Error: Invalid number: $number\n";

} else {
    # Set $factors to the array of factors of $number.
    $factors = factors($number);
    # Set $factors to a single dot-separated string of numbers in the array.
    $factors = join(" . ", $factors);
}

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Factors</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="styles/wp.css">
  </head>
  
  <body>  
    <h1>Factorisation</h1>
    <?php if(!empty($error)) { ?>
      <p class="alert"> <?= $error ?> <p>        
    <?php } else { ?>
      <p><?php echo "$number = $factors"; ?></p>
      
      <!-- write to file -->
      <?php $result = $number."=".$factors."\n";  // save the result with newline char
            include_once "includes/defs.php";
            writeToFile($result); 
      ?>
      
    <?php }  ?>
  
    <h2>Factorise again?</h2>
    <form method="get" action="factorise.php">
      <p>Number to factorise: <input type="text" name="number" value="<?= $number?>">
      <p><input type="submit" value="Factorise it!">
    </form>
  </body>
</html>
