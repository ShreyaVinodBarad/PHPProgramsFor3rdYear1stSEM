<?php
//Indexed Array
$season = array("Winter", "Rainy", "Summer", "Autum");
echo "Season are: $season[0],$season[1],$season[2]";
echo "<br>";
//Associative Array
$salary = array("Shreya" => "45000", "Gouri" => "50000", "Dhanesh" => "50000");
echo "Shreya Salary:" . $salary["Shreya"];
echo "<br>";
echo "Gouri Salary:" . $salary["Gouri"];
echo "<br>";
echo "Dhanesh Salary" . $salary["Dhanesh"];
//Multidimensional Array
$vehicle=array([[1,"Car"],[2,"Truck"],[3,"Bus"]]);
echo "<pre>";
print_r($vehicle);
echo "</pre>";






?>