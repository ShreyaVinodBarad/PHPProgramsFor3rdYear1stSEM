<?php
$a = 5;
try{
    if($a>=10){
        echo $a;
    }
    else{
        throw new Exception("Enter number greater than 10!");
    }
}
catch(Exception $e){
    echo $e->getMessage();
}
finally{
    echo "Final Block";
}
?>