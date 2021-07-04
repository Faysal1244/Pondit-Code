<?php 

    echo "Welcome to Our Building\nFor Entering In Our Building You Have to First fill Our some Requirements\n";

   echo " Are You Wearing Your Mask";
  $i = readline('Enter a Ans : (Y / N )');
  if ($i == 'Y'||$i== 'y')
  {
      echo " Are You Covid Negative";

      $j = readline('Enter a Ans : (Y / N )');
        if ($j == 'Y'||$j == 'y'){
        echo " Does your Body temperature below 98 degree";
        $k = readline('Enter a Ans : (Y / N )'); 
        if ($k == 'Y'|| $k == 'y'){
          echo "Welcome , You are elligiable to enter in our Building\n";
        }  elseif ($k == 'N'|| $k=='n')
        {
            echo "Sorry! You Can't Enter In our building";
        }
        else {
            echo "Please Enter Valid Ans";
        }
      
      }elseif($j== 'N'||$j== 'n')
      {
          echo "Sorry! You Can't Enter In our building";
      }
      else {
          echo "Please Enter Valid Ans";
          }
  
}elseif($i == 'N'|| $i=='n')
{
    echo "Sorry! You Can't Enter In our building\n";
}
else {
    echo "Please Enter Valid Ans\n";
}



// n 

?>