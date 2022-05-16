<?php
session_start();
include("config.php");
$ques=$_POST['ques'];
//echo $ques;
$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
	$uid=$row['0'];
	//echo $uid;
	
$query2="insert into tbl_ques(uid,ques,date) values('$uid','$ques',curdate())";
mysqli_query($conn,$query2);
}
header("Location:discuss.php");
?>