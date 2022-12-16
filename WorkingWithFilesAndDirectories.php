<?php
//Creating a Directory:
// $a = mkdir("MyFirstDirectory", 0777, true);
//0777 mode parameter by default
// if($a==1){
//     echo "The Directory has been created!";
// }
// else{
//     echo "Creation of Directory Failed";
// }
//Deleting a Directory
// $b = rmdir("MyFirstDirectory");
// if($b==1){
//     echo "The Directory has been Deleted!";
// }
// else{
//     echo "Deletion of Directory Failed";
// 
// }
$myfile = fopen("FirstPHP.txt", "w");
$created = fwrite($myfile, "Hello! I am working with PHP!");
//fclose($myfile);
//$DeletingAFile = unlink("FirstPHP.txt");
//rename("FirstPHP.txt", "MyFirstPHPManualFile.txt");
$myfile2 = fopen("SecondPHP.txt", "w");
$created = fwrite($myfile2, "This subject is Superb to Learn!");
echo copy("FirstPHP.txt","SecondPHP.txt");
?>