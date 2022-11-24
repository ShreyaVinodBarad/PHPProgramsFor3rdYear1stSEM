<?php
$a=mkdir("DeletingADirectory");
$b=rmdir($a);
if($b=1){
    echo "Directory is Deleted!";
}
else{
    echo "Directory is not Deleted!";
}
?>