<?php
include("config.php");
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$msg=$_POST['mssg'];
$query="insert into tbl_contact(name,mobile,email,message,date)values ('$name','$mobile','$email','$msg',now())";
mysqli_query($conn,$query);
?>
<center>
	<h1>Successfully Submit</h1>
</center>