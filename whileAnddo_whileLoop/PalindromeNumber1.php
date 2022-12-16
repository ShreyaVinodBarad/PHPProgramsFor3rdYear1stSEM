<?php
$num = 123454321;
$x = 0;
$n = $num;
while(floor($num)){
    $mod = $num % 10;
    $x = $x * 10 + $mod;
    $num = $num / 10;
}
if($n==$x){
    echo "Palindrome number";
}
else{
    echo "Not";
}

?>