<?php
#Indexed array
$season=array("Summer","Winter","Rainy");
echo "Seasons are: $season[0]<br>";

#Associative array
$salary=array("Shreya"=>"60000","Gouri"=>"100000");
echo "Shreya Salary is:".$salary["Shreya"]."<br>";

#Multidimensional array
$vechile=[[1,"Car"],
          [2,"Bus"],
		  [3,"Truck"]];
echo $vechile[0][1];
echo "<br>";

#Element Looping with an Index Based arrray.
$vechiles=array("Bus","Car","Truck","Bicycle");
$arrayLength=count($vechiles);
echo $arrayLength;
echo "<br>";
for($x=0;$x<$arrayLength;$x++){
	echo $vechiles[$x];
	echo "<br>";
}
	
#Looping with Associative Array using each() and foreach()
#1)foreach
$salarys=array("Shreya"=>"60000","Gouri"=>"100000");
foreach($salarys as $name=>$monthly_salary){
	echo $name."=>".$monthly_salary."<br>";
}
#foreach with index and its value:
foreach($salarys as $index=>$values){
	echo "salarys[".$index."]"."=>"."$values"."<br>";
}

#Array Library Functions:
#1)array()
$vechiles=array("Bus","Car","Truck","Bicycle");
echo $vechiles[0];
echo "<br>";
#2)array_change_key_case():
#indexed array
print_r(array_change_key_case($vechiles,CASE_UPPER));
echo "<br>";
#assocative array
$salarys=array("Shreya"=>"60000","Gouri"=>"100000");
print_r(array_change_key_case($salarys,CASE_UPPER));
echo "<br>";
#3)array_chunk
print_r(array_chunk($salarys,1));
echo "<br>";
#4)count():
echo count($vechiles);
echo "<br>";
#5)sort():
sort($vechiles);
foreach($vechiles as $v){
	echo "$v <br>";
}
#6)array_reverse:
$reverseArray=array_reverse($vechiles);
foreach($reverseArray as $rs){
	echo "$rs <br>";
}
#7)array_search:
echo array_search("Bus",$vechiles);
#8)array_intersect:
$sweet_name=array("s"=>"Shreya","g"=>"Gouri");
$item=array("e"=>"Shreya","p"=>"Gouri","f"=>"Dhanesh");
$name_and_item=array_intersect($sweet_name,$item);
print_r($name_and_item);
echo "<br>"
?>