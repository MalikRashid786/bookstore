<?php
session_start();
include ("config.php");
if($_SESSION['user']==""){
  session_destroy();
header("location:login.php");
}
$name=$_POST['username'];
//echo $name;
$fname=$_POST['fname'];
$email=$_POST['email'];
$mobile=$_POST['num'];
$address=$_POST['address'];
$city=$_POST['city'];
$pin=$_POST['pin'];
$altadd=$_POST['altadd'];
$bname=$_POST['name'];
$price=$_POST['price'];
$proid=$_POST['proid'];
$qty=$_POST['qty'];
$dc=$_POST['dc'];
$tp=$_POST['tp'];
$query="select quantity from tbl_product where proid='$proid'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
$allqty=$row['quantity'];
$newqty=$allqty-$qty;
//echo $newqty;
if($qty>$allqty)
{
	echo "<script>alert('Sorry! We Are out of stock');window.location.href='viewcart.php';</script>";
	
}
else{
	//echo "Qty available";
	$query1="insert into tbl_buy(name,fname,email,mobile,address,city,pin,altadd,bname,price,qty,dc,total,date) values('$name','$fname','$email','$mobile','$address','$city','$pin','$altadd','$bname','$price','$qty','$dc','$tp',now())";
	$check=mysqli_query($conn,$query1);
	if($check==true)
	{
       $query2="update tbl_product set quantity='$newqty'where proid='$proid'";
       mysqli_query($conn,$query2);
       header("location:payu.php?tp=$tp");
	}
	else{
	  echo "Updattion Error";
	}
}
?>