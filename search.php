<?php
include("config.php");
@$search=$_POST['search'];
$query="select * from tbl_product where bname like'%$search%' or author like'%$search%'";
$res=mysqli_query($conn,$query);
?>
<html>
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="css/page.css" rel="stylesheet" type="text/css"/>
	<link href="css/profile.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<form action="search.php" method="post">
<p>Search : </p>
<input type="text" name="search" value="<?php echo $search ?>"/>
<input type="submit" value="Search"/>
</form>
<p>Result : </p>
<?php
if(mysqli_num_rows($res)!=0)
{
	while($row=mysqli_fetch_array($res))
	{
		?>
		<div class="box2" style="margin-bottom:10px;">
			<div class="box1" style="background-image:url(admin/product/<?php echo $row['picname']; ?>); background-size:100% 100%; width: 100px;height: 100px">
			<div class="price"><b>&#8377 <?php echo $row['price']; ?></b></div>
			</div>
			<a href="cart.php?pid=<?php echo $row['proid']; ?>"><div class="box4"><h6>ADD TO CART</h6></div></a>
			<a href="buynow.php?pid=<?php echo $row['proid']; ?>"><div class="box5"><h6>BUY NOW</h6></div></a>
		</div>
		<?php
	}
}
else
{
	echo "No Result";
}
?>
</body>
</html>




