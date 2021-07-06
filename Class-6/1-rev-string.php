<?php 

$j = array("apple", "dell", "hp", "microsoft", "lenovo",
"fujitsu");

$length = count($j);
$reversed = array_reverse($j);


for ($i=0; $i< $length ; $i++) { 
    $str_rev = strrev($j[$i]);
    echo $str_rev . PHP_EOL;
}





?>