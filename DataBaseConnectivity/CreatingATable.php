<?php
$conn=mysqli_connect("localhost","root","","shreyapracticaldb");
//$table = "CREATE TABLE `shreyapracticaldb`.`studentdata1` (`RollNo` INT(20) NOT NULL AUTO_INCREMENT , `NameOfStudent` VARCHAR(30) NOT NULL , `CourseName` VARCHAR(20) NOT NULL , `MobileNumber` INT(10) NOT NULL , PRIMARY KEY (`RollNo`)) ENGINE = InnoDB COMMENT = 'StudentData';";
//$resultofTable = mysqli_query($conn, $table);
//$insertingData = "INSERT INTO `studentdata1` (`RollNo`, `NameOfStudent`, `CourseName`, `MobileNumber`) VALUES ('2', 'Gouri Vinod Barad', 'BSC IT', '1329222495')";
//$alteringData = "ALTER TABLE `studentdata1` ADD `MotherName` VARCHAR(20) NOT NULL AFTER `CourseName`";
//Altering data to add new columns!
//$DeletingData = "DELETE FROM `studentdata1` WHERE `studentdata1`.`RollNo` = 1";
//Deleting Data from the table!
$insertingDataForUpdating = "INSERT INTO `studentdata1` (`RollNo`, `NameOfStudent`, `CourseName`, `MotherName`, `FatherName`, `MobileNumber`) VALUES ('2', 'Gouri Vinod Barad', 'BSC IT', 'Padma Barad', 'Vinod Barad', '1529222495')";
$updatingData = "UPDATE `studentdata1` SET `NameOfStudent` = 'Shreya Vinod Barad' WHERE `studentdata1`.`RollNo` = 1";
$resultofTable = mysqli_query($conn, $updatingData);
if($resultofTable){
    //echo "The table has beencreated!";
    //echo "The Data has been Inserted!!";
    //echo "The data has been altered!";
    //echo "The row has been deleted!";
    echo "The row has been modified!";
}
else{
    //echo "Table has not yet Created!" . mysqli_error($conn);
    //echo "The data has not been created" . mysqli_error($conn);
    //echo "The data has not been altered!" . mysqli_error($conn);
    //echo "The row has not been deleted!" . mysqli_error($conn);
    echo "The row has not been modified!" . mysqli_error($conn);
}
?>