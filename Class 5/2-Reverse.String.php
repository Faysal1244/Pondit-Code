<?php 
 
    $val = "hello";

    $length= strlen($val);

    for($i=($length-1) ; $i>=0;$i--)
{
    echo $val[$i];
}
?>