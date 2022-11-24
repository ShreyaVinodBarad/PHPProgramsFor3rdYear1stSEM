<?php
if(rename("CreatingAndOpeningAndClosingAFile.txt","CreatingOpeningAndClosingAFile.txt")){
    echo "The File Name is Renamed!";
}
else{
    echo "The File Name is NOT Renamed";
}
?>