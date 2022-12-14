<?php
$a = 10;
try{
    if($a>=10){
        echo $a;
    }
    else{
        throw new Exception("Enter the number is greater than 10!");
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
finally{
    echo "Final Block!";
}
?>