<?php 
 
    echo "Enter Your String\n";
    $j = readline();

    $length= strlen($j);

    for($i=($length-1) ; $i>=0;$i--)
{
    echo $j[$i];
}



?>