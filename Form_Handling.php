<?php
$conn = new mysqli("localhost", "root", "", "shreyaphp");
if($conn){
    echo "Connection Established!";
}
else{
    die(mysqli_error($conn));
}
if(isset($_POST["submitButton"])){
    $FirstName = $conn->real_escape_string($_POST['fname']);
    $LastName = $conn->real_escape_string($_POST['lname']);
    $Email = $conn->real_escape_string($_POST['email']);

    $sql="INSERT INTO `form` (`Id`, `FirstName`, `LastName`, `EmailAddress`) VALUES ('0', 'FirstName', 'LastName', 'email')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "The Form Filled Successfully!";
    }
    else{
        die(mysqli_error($conn));
    }
}

?>
