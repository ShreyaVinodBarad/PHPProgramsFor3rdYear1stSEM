<?php
session_start();
if(isset($_SESSION["UserName"])){
    echo $_SESSION["UserName"];
    echo "<br>";
    echo $_SESSION["FavAnimal"];
}
else{
    echo "please Continue to Login";
}
?>