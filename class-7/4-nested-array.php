<?php 
 $a= [1, 2, [3, 4], 5, [6, [7, 8, 9], 0]];


$flat = array_merge($a);


$singleArray = []; 
foreach ($parentArray as $a)
{ 
    foreach ($a as $value) 
    { 
    $singleArray[] = $value; 
    } 
}
print_r($single);
?>