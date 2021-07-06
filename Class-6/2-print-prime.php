<?php 
 


   $num = [1, 6, 7, 11, 123, 100, 51, 29];
 $leng=   count($num);


function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
	      {
		   return 0;
		  }
    }
  return 1;
   }


 for($i=0; $i<$leng; $i++)
 {
$a = IsPrime($num[$i]);


        if ($a==0){
            echo ' This is not a Prime Number.....'."\n";}
        else{
            echo ' This is a Prime Number..'."\n";
            }

        }
