<?php
include"config.php";
$name=$_POST['name'];
$fname=$_POST['fname'];
$gender=$_POST['gen'];
$email=$_POST['email'];
$mobile=$_POST['mobilenumber'];
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
$query2="select email from tbl_user where email='$email'";
$res2=mysqli_query($conn,$query2);
if($row2=mysqli_fetch_array($res2))
{
	header("location:reg.php?msg=12");
}
else
{
$query="insert into tbl_user(name,fname,gender,email,password,mobile,address,city,pincode,filename,date) values('$name','$fname','$gender','$email','$password','$mobile','$address','$city','$pin','$filename',now())";
mysqli_query($conn,$query);
move_uploaded_file($tmp_name, $location.$filename);
header("location:login.php?msg=9");
}
}
else
{
header("location:reg.php?msg=13");
}
?>