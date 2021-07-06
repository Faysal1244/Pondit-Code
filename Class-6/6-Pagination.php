<?php 
$array = range(1,100);
 
 function paginate($offset, $perpage)
 {
     global $array;

     print_r($array) . PHP_EOL;
 }

 echo "Done";
 paginate(0,5);

?>