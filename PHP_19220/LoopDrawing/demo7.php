<?php
$j = 5;    
$i = 0;  
$n=5;
for ($r=0; $r<=7; $r++)
{
    for ($c=0; $c<=7; $c++)
      {
        if ($c == 1 or (($r == $c + 1) and $c != 0))
            echo "*";   
        else if ($r == $i and $c == $j)
           {  
              echo "*";    
              $i=$i+1;  
              $j=$j-1;
           }
        else
            echo " ";   
}    
     echo "\n";    
}
?>