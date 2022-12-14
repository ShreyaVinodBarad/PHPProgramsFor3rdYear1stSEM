<?php
$severname = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($severname, $username, $password);
if(!$conn){
    die("The connection has not yet been established!").mysqli_connect_error();
}
else{
    echo "The connection has been established!";
}











?>