<?php 
  $num = [1, 6, 7, 11, 123, 100, 51, 29];
  $leng=   count($num);

for ($i = 0; $i < $leng; $i++) {
  
    $flag = 1;

    if ($num[$i] % 2 == 0) {
      $flag = 0;
    }
  }
    if ($flag == 1) {
        echo $num[$i]." is Prime\n";
    }
    else{
      echo $num[$i]." is not Prime\n";
    }

