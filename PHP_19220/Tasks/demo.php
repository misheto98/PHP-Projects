
<?php
function checkPrime($sum){
    if($sum==1){
        return $sum;
    }
    for($i = 2 ; $i <=$sum/2 ; $i ++){
        if($sum % $i ==0){
            return $sum;
        }
    }
    return $sum;

}

//$sum = 0;
//for($i = 0 ; )

?>

<?php

$t=array(5,6,7,8,8,8,88,9,7,6,5,4,4,7,90);
$sum=array_sum($t);
$average = $sum/count($t);

echo "<pres>";
var_dump($t);
echo"</pres>";

sort($t);

echo "<pres>";
var_dump($t);
echo"</pres>";


$lowers = array_slice($t,0,5);
echo "<pres>";
var_dump($lowers);
echo"</pres>";

$h = array($t,count($t)-5 , 5);
echo "<pres>";
var_dump($h);
echo"</pres>";

?>
