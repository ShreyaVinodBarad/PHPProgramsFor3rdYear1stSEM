<?php
if(isset($_POST["Upload"])){
    $a=$_POST["name"];
    $b=$_POST["email"];
    $c=$_POST["password"];
    echo "<h2><b>Name is:$a</b></h2><br>";
    echo "<hr>";
    echo "<h2><b>Email is:$b</b></h2><br>";
    echo "<hr>";
    echo "<h2><b>Password is:$c</b></h2><br>";
    echo"<hr>";

    # $file=$FILES["file"];
    # print_r("$file");-->It shows an array which contain different elements of the file 
    $file_name=$_FILES["file"]["name"];
    $file_type=$_FILES["file"]["type"];
    $file_size=$_FILES["file"]["size"];
    $file_temp_loc=$_FILES["file"]["tmp_name"];
    $file_store="Store_File/".$file_name;
    if(move_uploaded_file($file_temp_loc,$file_store)){
        echo "<h2><b>File is Uploaded</b></h2>";
    } 
}

?>