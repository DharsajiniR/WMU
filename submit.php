<?php
$name=$_POST['name'];
$dobdate=$_POST['dobdate'];
$dobmonth=$_POST['dobmonth'];
$dobyear=$_POST['dobyear'];
$nationality=$_POST['nationality'];
$religion=$_POST['religion'];
$age=$_POST['age'];
$gender=$_POST['sex'];
$caste=$_POST['caste'];
$handicapped=$_POST['handicapped'];
$bloodgroup=$_POST['bloodgroup'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$aadhar=$_POST['aadhar'];

$fathername=$_POST['fathername'];
$fatherqualification=$_POST['fatherqualification'];
$fatheroccupation=$_POST['fatheroccupation'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$mothername=$_POST['mothername'];
$motherqualification=$_POST['motherqualification'];
$motheroccupation=$_POST['motheroccupation'];

$dob = "{$dobyear}-{$dobmonth}-{$dobdate}";
$inputdob = date("Y-m-d",strtotime($dob));

$link = mysqli_connect("localhost", "root", "", "collegedb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO personal (name, dob, nationality, religion, age, gender, caste, handicapped, bloodgroup, contact, email, aadhar, father_name, father_qualification, father_occupation, address, pincode, mother_name, mother_qualification, mother_occupation) VALUES ('$name', '$inputdob', '$nationality', '$religion', '$age', '$gender', '$caste', '$handicapped', '$bloodgroup', '$contact', '$email', '$aadhar', '$fathername', '$fatherqualification', '$fatheroccupation', '$address', '$pincode', '$mothername', '$motherqualification', '$motheroccupation')";
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