<?php
$a = 5;
try{
    if($a>=10)
{
    echo $a;
}
else
{
    throw new Exception("Enter the  number greater than 10!!");
}

}
catch(Exception $e){
    echo $e->getMessage();
}
finally{
    echo "Finally Block!";
}
?>