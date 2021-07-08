<?php 
 $a = [10,20,30,40,50];
 $b = [1,2,3,4,5,6];

 function sumArray($a,$b){
     if(count($a)==count($b)){
        $c = array();
        foreach (array_keys($a + $b) as $key) {
        $c[$key] = $a[$key] + $b[$key];
        }
            return $c;
    }else{
    echo "please take same size of two array";
    return false;
}
}


$d=sumArray($a,$b);

//  print_r(sumArray($a,$b));
 print_r($d);


?>