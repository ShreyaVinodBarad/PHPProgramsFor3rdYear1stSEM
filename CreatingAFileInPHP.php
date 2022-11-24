<?php
#Creating a File
$file=fopen("CreatingAFile.txt","w");
#Writing A File
$Created=fwrite($file,"Hello, I am Learning PHP Programming");
fclose($file);
?>