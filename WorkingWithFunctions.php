<?php
//Call By Value
function display($i){
    $i++;
}
$i = 10;
display($i);
echo $i;
echo "<br>";
//Call By Refernece
function show(&$a){
    $a++;
}
$a = 10;
show($a);
echo $a;
?>