<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr) {
    $len = count($arr);
    $positive = 0;
    $negative = 0;
    $zero = 0;
    for ($i = 0; $i < $len; $i++) {
        if ($arr[$i] > 0) {
            $positive++;
        }
        else if ($arr[$i] < 0) {
            $negative++;
        }
        else if ($arr[$i] == 0) {
            $zero++;
        }
    }
    $fp= $positive/$len;
    echo number_format((float)$fp, 6, '.', '')."\n";
    
    $fn= $negative/$len;
    echo number_format((float)$fn, 6, '.', '')."\n";
    
    $fz= $zero/$len;
    echo number_format((float)$fz, 6, '.', '')."\n";
    

}

$n = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr);
?>
