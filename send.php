<?php
$email=$_POST['email'];
$mobileno=$_POST['mobileno'];
$message=$_POST['message'];
$link = mysqli_connect("localhost", "root", "", "collegedb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO contact (email, mobile_no, message) VALUES ('$email', '$mobileno', '$message')";
if(mysqli_query($link, $sql)){

    header("Location:index.php");
    unset($_POST);
    //echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);

?>