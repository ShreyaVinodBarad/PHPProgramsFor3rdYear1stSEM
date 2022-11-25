<?php
session_start();
if(isset($_SESSION["Name"])){
    echo "My Name is " . $_SESSION["Name"];
    echo "<br>";
    echo "My Surname is " . $_SESSION["Surname"];
    echo "<br>";
}
else{
    echo "Please Login to Continue!";
}

?>