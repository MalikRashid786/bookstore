<?php
$pid=$_REQUEST['pid'];
include("config.php");
$query="delete  from tbl_cart where proid='$pid'";
mysqli_query($conn,$query);
header("location:viewcart.php");
?>