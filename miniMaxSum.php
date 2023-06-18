<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    // Write your code here
    $n = sizeof($arr);
    $min = 0;
    $max = 0;
    rsort($arr);
    $j = $n - 1;
  
    for($i=0;$i<$n-1;$i++){
        $max += $arr[$i];
        $min += $arr[$j];
        $j -= 1;
    }
    echo $min .' '. $max;
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
?>
