<?php
$file=fopen("CreatingAFile.txt","r");
$FileReading=fread($file,filesize("CreatingAFile.txt"));
if(fclose($file)){
    echo "File Closed!";
}
else{
    echo "File Not Closed!";
}
?>