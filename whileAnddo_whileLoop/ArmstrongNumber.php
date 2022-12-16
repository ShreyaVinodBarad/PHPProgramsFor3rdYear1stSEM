<?php
$num = 371;
$sum = 0;
$x = $num;
while($num!=0){
    $i = $x % 10;
    $sum = $sum + $i * $i * $i;
    $x = $x % 10;
}
if($num==$sum){
    echo "It is the Armstrong Number!";
}  
else{
    echo "It is not the Armstrong Number!";
}
?>