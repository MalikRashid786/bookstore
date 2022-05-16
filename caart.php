<?php
include("header.php");
include('config.php');
session_start();
$pid=$_REQUEST['pid'];
$email=$_SESSION['user'];
$query="select * from tbl_user where email='$email'";
$res=mysql_query($query);
if($row=mysql_fetch_array($res,MYSQL_BOTH))
{
     $uid=$row['sid'];
}
$query2="insert into tbl_cart(userid,proid,date) values('$uid','$pid',now())";
mysql_query($query2);
header("location:viewcart.php");
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