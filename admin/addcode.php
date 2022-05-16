<?php
include ("../config.php");
$bname=$_POST['bname'];
$author=$_POST['author'];
$cate=$_POST['cate'];
$price=$_POST['price'];
$qut=$_POST['qut'];
echo$rating=$_POST['rating'];
echo$oldprice=$_POST['oldprice'];
echo$off=$_POST['off'];
echo$special=$_POST['special'];
$des=$_POST['description'];
$filename=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="product/";
$query="insert into tbl_product(bname,author,quantity,cateid,price,picname,rating,oldprice,off,special,description,date) values('$bname','$author','$qut','$cate','$price','$filename','$rating','$oldprice','$off','$special','$des',curdate())";
mysqli_query($conn,$query);
move_uploaded_file($tmp_name, $location.$filename);
header("location:addproduct.php");
?>