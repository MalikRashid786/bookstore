<?php
include("config.php");
$id=$_POST['id'];
//echo $id;
$name=$_POST['name'];
$fname=$_POST['fname'];
$mobile=$_POST['mobilenumber'];
$gender=$_POST['gen'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
//echo $cpassword;
$city=$_POST['city'];
$pin=$_POST['pin'];
$address=$_POST['address'];
$filename=$_FILES['file']['name'];
$size=$_FILES['file']['size'];
$type=$_FILES['file']['size'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="userupload/";
if($password==$cpassword)
{
$query="update tbl_user set name='$name',fname='$fname',gender='$gender',email='$email',password='$password',mobile='$mobile',address='$address',city='$city',pincode='$pin',filename='$filename' where sid='$id'";
mysqli_query($conn,$query);
move_uploaded_file($tmp_name, $location.$filename);
header("location:profile.php?msg=1");
}
else
{
	header("location:updateprofile.php?msg=1");
}
?>