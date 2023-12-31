<?php

/*
 * Complete the 'birthdayCakeCandles' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY candles as parameter.
 */

function birthdayCakeCandles($candles) {
    // Write your code here
    $count = 0;
    $max = 0;
    for($i = 0; $i < count($candles) ; $i++)
        {
            $num = $candles[$i];
            if($num > $max)
            {
                $max = $num;
                $count = 1;
            }else if($max == $num)
            {
                $count++;
            }
        }
        return $count;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$candles_count = intval(trim(fgets(STDIN)));

$candles_temp = rtrim(fgets(STDIN));

$candles = array_map('intval', preg_split('/ /', $candles_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = birthdayCakeCandles($candles);

fwrite($fptr, $result . "\n");

fclose($fptr);
?>
