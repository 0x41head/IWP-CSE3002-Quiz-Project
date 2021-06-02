<?php
session_start();
header('location:index.php');

$con=mysqli_connect('localhost','root');
if($con){
    echo "connection done";
}else{
    echo "no connection";
}

mysqli_select_db($con,'userdb');


$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];


$qe=" insert into feedback(name,email,subject,message) values('$name','$email','$subject','$message') ";
mysqli_query($con,$qe);
// echo " <script> alert("Feedback submitted successfully"); </script> ";

?>