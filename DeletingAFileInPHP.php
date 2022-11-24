<?php
$a=fopen("DeletingAFileInPHP.txt","w");
fwrite($a,"Hello World!");
if(unlink("DeletingAFileInPHP.txt")){
    echo "File Deleted!";
}
else{
    echo "File Not Deleted!";
}
?>