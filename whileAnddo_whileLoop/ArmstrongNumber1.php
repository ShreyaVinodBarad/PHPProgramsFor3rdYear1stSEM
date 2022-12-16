<?php
//The cubes of digit of the number should be the number itself!
$num = 371;
$sum = 0;
$x = $num;
while($num!=0){
    $i = $x % 10;
    $sum = $sum + $i * $i * $i;
    $x = $x % 10;
}
if($num==$sum){
    echo "Its a Armstrong number!";
}
else{
    echo "Its a Armstrong number!";
}
?>
