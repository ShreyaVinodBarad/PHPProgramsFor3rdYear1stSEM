<?php
//Establishing Connection!
$conn = mysqli_connect("localhost", "root", "");
//Creating A Database!
$db = "CREATE DATABASE shreyadb2";
//Conforming the establishment of Database!
$result = mysqli_query($conn, $db);
if($result){
    echo "The database has been created!";
}
else{
    echo "The database is not created!" . mysqli_error($conn);
}
//Conforming the Connection!
if(!$conn){
    die("The connection has failed") . mysqli_connect_error();
}
else{
    echo "The connection has established!";
}
?>