<?php
session_start();
$_SESSION["UserName"] = "Shreya";
$_SESSION["FavAnimal"] = "Rabbit";
echo "We have Saved session";
?>