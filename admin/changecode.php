<?php
session_start();
$op=$_POST['op'];
$np=$_POST['np'];
$cp=$_POST['cp'];
$email=$_SESSION['admin'];
include("../config.php");
$query="select password from tbl_admin where email='$email'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
	$pp=$row['password'];
}
if($pp==$op)
	{
		if($op==$np)
		{
			header("location:change.php");
			//echo "Existing Password So Not Change Password";
		}
		else if($np==$cp)
		{
			$query2="update tbl_admin set password='$cp' where email='$email'";
			mysqli_query($conn,$query2);
			session_destroy();
			header("location:index.php?msg=4");
			///echo "change";
		}
		else{
		    header("location:index.php");
			//echo "Password Not Mached";
		}
	}
	else
	{
		//header("location:index.php");
		echo "Not Mached Old Password";
	}
?>