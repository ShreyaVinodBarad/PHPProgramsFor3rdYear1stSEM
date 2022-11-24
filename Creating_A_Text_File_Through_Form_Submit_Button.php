<?php
if(isset($_POST["Submit"])){
    $File_Open=fopen("CreatingATextFileThroughFormSubmitButton.txt","a");
    $text=$_POST["name"];
    fwrite($File_Open,$text);
    fclose($File_Open);
}
?>