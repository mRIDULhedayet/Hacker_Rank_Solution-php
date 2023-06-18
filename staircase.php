<?php

/*
 * Complete the 'staircase' function below.
 *
 * The function accepts INTEGER n as parameter.
 */

function staircase($n) {
    // Write your code here
    for($i=1; $i<=$n; $i++) {
        for($j=1; $j<=$n-$i; $j++) {
        echo " ";
        }
        for($j=1; $j<=$i; $j++) {
        echo "#";
        }
        echo "\n";
    }

}

$n = intval(trim(fgets(STDIN)));

staircase($n);

?>
