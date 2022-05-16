<?php
session_start();
include("../config.php");
$email=$_POST['email'];
$password=$_POST['password'];
//echo $password;
$query="select * from tbl_admin where email='$email' and password='$password'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
	$_SESSION['admin']=$email;
	header("location:profile.php");
}
else{
	header("location:index.php");
}
?>