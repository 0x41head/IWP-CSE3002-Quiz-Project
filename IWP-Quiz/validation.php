<?php
session_start();


$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "project";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}



$mail=$_POST['email'];
$pswd=$_POST['password'];

$q=" select * from login where email = '$mail' && password = '$pswd' ";
$result=mysqli_query($conn,$q);
$num=mysqli_num_rows($result);
while ($row = $result->fetch_assoc()) {
    $getName=$row["username"];
    $getEmail=$row["email"];
    $getID=$row["id"];

}
// $q2=" select username from login where email = '$mail' && password = 'pswd' ";
// $getName=mysqli_query($con,$q);


if($num==1){
    $_SESSION['username']=$getName;
    $_SESSION['email']=$getEmail;
    $_SESSION['id']=$getID;
    header('location:student-dashboard.php');
}else{
    // echo '<script>alert("User not found")</script>';
    header('location:invalid.php');
}

?>