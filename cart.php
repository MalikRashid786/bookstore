<?php
include("header.php");
include('config.php');
session_start();
$pid=$_REQUEST['pid'];
$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
     $uid=$row['sid'];
     $query3="select * from tbl_cart where userid='$uid' and proid='$pid'";
     $res3=mysqli_query($conn,$query3);
     if($row3=mysqli_fetch_array($res3))
     {
     	echo "<script>alert('Item Already Added');window.location.href='product.php';</script>";
     }
     else{
     	$query2="insert into tbl_cart(userid,proid,date) values('$uid','$pid',now())";
        mysqli_query($conn,$query2);
        header("location:viewcart.php");
     }
}

?>
<head>
	
</head>
<body>
	<section>
		<div class="container">
			<h1>MY CART</h1>
		</div>
	</section>
</body>


<?php
include("footer.php");
?>