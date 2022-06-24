<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
    // Write your code here

$lonely_ineteger="";
$count=count($a);
for($i=0; $i<$count; $i++){
    $lonely_int=$a[$i];
    $ln_count=0;  
      foreach($a as $val){
        if($val==$lonely_int){
          $ln_count++;
        }
      }
      
    if($ln_count==1){
        $lonely_ineteger=$a[$i];
      }  
}

return $lonely_ineteger;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
