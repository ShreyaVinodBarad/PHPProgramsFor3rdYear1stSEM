<?php
$file=fopen("CreatingAFile.txt","r");
if(fread($file, filesize("CreatingAFile.txt"))){
    echo "File Opened!";
}
else{
    echo "File Not Opened!";
}
?>