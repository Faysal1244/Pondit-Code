<?php 
  $num = [1, 6, 7, 11, 123, 100, 51, 29];
  $leng=   count($num);

for ($i = 0; $i < $leng; $i++) {
    $j = 2;
    $flag = 1;

    for ($j=2; $j <$num[$i] ; $j++) { 
      if ($num[$i] % $j == 0) {
        $flag = 0;
        break;
      }
    }
    if ($flag == 1) {
        echo $num[$i]." is Prime\n";
    }
    else{
      echo $num[$i]." is not Prime\n";
    }
}
