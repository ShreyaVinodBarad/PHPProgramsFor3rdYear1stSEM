<?php
if(isset($_POST["Upload"])){
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

?><br>
<a download="<?php echo $file_name?>" href="Store_File/<?php echo $file_name?>">Click Here To Download</a>