<?php
session_start();

header('location:settings.php');

$con=mysqli_connect('localhost','root');
if($con){
    echo "connection done";
}else{
    echo "no connection";
}

mysqli_select_db($con,'userdb');



$uname=$_POST['username'];
$mail=$_POST['email'];
$ag=$_POST['age'];
$gen=$_POST['gender'];
$ph=$_POST['phone'];
$pr=$_POST['profession'];

$p=" delete from profile where email = '$mail'; ";
$result=mysqli_query($con,$p);
$q="insert into profile values('$uname','$mail','$ag','$gen','$ph','$pr') ";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);

if($num==1){
    $_SESSION['username']=$uname;
    $_SESSION['email']=$mail;
    header('location:profile.php');
}else{
    // echo '<script>alert("User not found")</script>';
    header('location:invalid.php');
}



?>