<?php

function solveMeFirst($a,$b){
  
  $sum=$a+$b;
  return $sum; 
  
}

$handle = fopen ("php://stdin","r");
$_a = fgets($handle);
$_b = fgets($handle);
$sum = solveMeFirst((int)$_a,(int)$_b);
print ($sum);
fclose($handle);
?>

