<?php
include("../config.php");
$cate=$_POST['cate'];
$query="insert into tbl_category(category,date) values('$cate',now())";
mysqli_query($conn,$query);
header("location:addcategory.php");
?>