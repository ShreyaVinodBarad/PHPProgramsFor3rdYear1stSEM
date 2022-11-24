<?php
#Making a Simple Directory
#mkdir("CreatingADirectory")
#Nested Directory:
$a=mkdir("CreatingADirectory/NestedFolder",0777,true);
if($a==1){
    echo "The Directory is Created!";
}
else{
    echo "The Directory is not yet been Created!";
}
?>