<?php
session_start();
if(isset($_SESSION["Username"])){
    echo $_SESSION["Username"];
    echo "<br>";
    echo $_SESSION["Animal"];
}
else{
    echo "Login to continue!";
}
?>