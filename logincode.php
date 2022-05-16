<?php
session_start();
include "config.php";
$email=$_POST['email'];
$pass=$_POST['password'];
$query="select * from tbl_user where email='$email' and password='$pass'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
  $_SESSION['user']=$email;
  header("location:profile.php");
  
}
else{
	header("location:login.php?msg=2");
	session_destroy();
	
}
?>