<?php 

function TakeArrayVal(){
echo "How Many Number You want to add in your array\n\n";
echo "Minimum take 10 Array\n";
$n = readline();
// if($n=10){
    echo "you have to take at least 10 Elements\n";
// }else{
    echo "\n";

    for ($i=1; $i <=$n ; $i++) { 

    echo "Enter Array No : $i : ";
    $a[] = readline();
}
return $a;
}
// }

function sumArray(){
    $a = TakeArrayVal();
    $sum = 0;

    for ($i=0; $i<count($a); $i++){
        $sum += $a[$i];
    }

    echo $sum;
}

sumArray();

 
?>