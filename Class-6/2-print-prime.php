<?php 
  $num = [1, 6, 7, 11, 123, 100, 51, 29];
  $leng=   count($num);

for ($i = 2; $i < $leng; $i++) {
  
    $flag = 1;

   $check=  $num[$i] % 2 ;
     
  
    if ($check == 0) {
        echo $num[$i]." is Prime\n";
    }
    else{
      echo $num[$i]." is not Prime\n";
    }

  }