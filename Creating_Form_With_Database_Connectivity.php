<?php
$conn = mysqli_connect("localhost", "root", "", "loginformforpracticalexam");
if(!$conn){
    die("Connection Failed!") . mysqli_connect_error();
}
else{
    echo "The Connection Established!";
}
if(isset($_POST["Submit"]))
{
    $Eamil = $conn->real_escape_string($_POST["email"]);
    $Password = $conn->real_escape_string($_POST["password"]);
//Insering the data
    $sql = "INSERT INTO `loginform` (`Email`, `Password`) VALUES ('Email', 'Password');";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "The data has been saved to database!";
    }
    else{
        echo "The data has not saved!" . mysqli_error($conn);
    }
}
?>