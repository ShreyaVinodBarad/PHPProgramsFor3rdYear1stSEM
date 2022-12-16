<?php
//The Fibonacci sequence is a type series where each number is the sum of the two that precede it. It starts from 0 and 1 usually.
$num = 0;
$num2 = 1;
$num1=0;
echo $num1 . " " . $num2 . " ";
while($num<10){
    $num3 = $num2 + $num1;
    echo $num3 . " ";
    $num1 = $num2;
    $num2 = $num3;
    $num = $num + 1;
}

?>