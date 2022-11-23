<?php
if(isset($_GET["submit_button"])){
    $a=$_GET["name"];
    $b=$_GET["email"];
    $c=$_GET["FatherName"];
    $d=$_GET["MotherName"];
    $e=$_GET["RollNumber"];
    $platform=$_GET["platform_interested"];
    $city=$_GET["select_the_city"];
    if(empty($a) or empty($b)  or empty($c) or empty($d) or empty($e)){
        echo "No Field Should Be EMPTY";
    }
    else{
        echo "<h1> Name is $a</h1>";
        echo "<h1> Email Address is $b</h1>";
        echo "<h1> Father Name is $c</h1>";
        echo "<h1> Mother Name is $d</h1>";
        echo "<h1> Roll Number is $e</h1>";

    }
    echo "<hr>";
    foreach($platform as $platforms =>$p){
        echo "<h1><b>Platform Intersted:$p</b></h1><br>";
    }
    echo "<hr>";
    foreach($city as $cities => $c){
        echo "<h1><b>City Interested: $c </b></h1><br>";
    }
    echo "<hr>";
}
else{
    echo "<h1>The Form Data is not Submitted!</h1>";
}
?>