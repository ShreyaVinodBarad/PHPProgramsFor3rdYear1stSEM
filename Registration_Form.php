<?php
$conn = mysqli_connect("localhost", "root", "", "registrationform");
if(!$conn){
    echo "Connection failed".mysqli_connect_error();
}
else{
    echo "connection Successful";
}
if(isset($_POST["Submit"])){
    $Name = $conn->real_escape_string($_POST["fname"]);
    $FatherName = $conn->real_escape_string($_POST["fathername"]);
    $MotherName = $conn->real_escape_string($_POST["mothername"]);
    $MoblieNumber = $conn->real_escape_string($_POST["mobilenumber"]);
    $sql = "INSERT INTO `registrationform` (`Name`, `FatherName`, `MotherName`, `MobileNumber`) VALUES ('Name', 'FatherName', 'MotherName', 'MobileNumber')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Form Filled";
    }
    else{
        echo "Form Failed to Fill";
    }

}













?>