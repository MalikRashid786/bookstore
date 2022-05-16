<?php
session_start();

include("config.php");
$feed=$_POST['feed'];
$email=$_SESSION['user'];
$query1="select * from tbl_user where email='$email'";
$res=mysqli_query($conn,$query1);
if($row=mysqli_fetch_array($res))
{
   $userid=$row['sid'];
}
$query="insert into tbl_feedback(userid,feedback,date) values('$userid','$feed',now())";
mysqli_query($conn,$query);
header("location:feedback.php?f=1");
?>