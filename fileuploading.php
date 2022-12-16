<?php 
if(isset($_POST["submit"])){
    $file = $_FILES["upload"];
    print_r("$file");
}
?>