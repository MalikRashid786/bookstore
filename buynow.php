<?php
session_start();
include("userheader.php");
 $pid=$_REQUEST['pid'];
//echo $proid;
$qty=1;
if($_SESSION['user']==""){
  session_destroy();
header("location:login.php");
}
include("config.php");
$query="select * from tbl_product where proid='$pid'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/> 
<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript"  src="js/bootstrap.bundle.min.js"></script>
<style type="text/css">
	input{
		border: none;
		width: 40px;
	}
	#button{

	}
</style>
</head>
<body>
<section id="buynow">
<div class="container">
<br/>
<div class="row">
 <div class="col-md-3">			
  <div class="col-3-lg">
  <div class="card">
    <img class="img-fluid" src="admin/product/<?php echo $row['picname'];?>" />
    </div>
   </div>
 </div>
 <div class="col-md-5"></div>
 <div class="col-md-4">
 <div class="card">
  	<div class="card-header">ORDER_INFO</div>
  	<form action="purchase.php" method="post">
    <div class="card-body">
      <h6 class="card-title" style="font-weight: bold;">Name : <a href="#"><?php echo $row['bname'];?></a></h6>
      <p class="card-title"><span style="font-weight: bold;">Author : </span> <?php echo $row['author'];?></p>
      <p class="card-text"><span style="font-weight: bold;">Description</span> : <?php echo $row['description'];?></p>
      <a href="#" class="badge badge-success"><?php echo $row['rating'];?>*</a> (<?php echo $row['quantity'];?>)<br/>
      <b>&#8377;<?php echo $row['price'];?>&nbsp;</b><strike>&#8377;<?php echo $row['oldprice'];?></strike><span class="sp">&nbsp;&nbsp; <?php echo $row['off'];?> Off</span><br/>
      <b class="sp"><span style="color: green"><?php echo $row['special'];?></span></b>
<table>
<input type="hidden" name="id" value="<?php echo $row['proid']?>"/>
<hr/>
<span style="font-weight: bold;">Details:-</span>
<tr>
	<td>Qty:</td>
	<td><input type="text" name="qty" id="q" value="<?php echo $qty;?>" readonly/></td>
</tr>
<tr>
	<td>Price:</td>
	<td><input type="text" name="price" id="p" value="<?php echo $qty*$row['price'];?>" readonly/></td>
</tr>
<tr>
	<td>Delivery Charges:</td>
	<td><input type="text" value=" +50" readonly/></td>
</tr>
<tr>
	<td>Total Amount:</td>
	<td><input type="text" id="tp" value="&#8377; <?php echo $qty*$row['price']+50;?>" readonly/></td>
</tr>
</table>
</div>
<button type="submit" value="save&continue" class=" btn btn-success"> Save&Continue</button>
</form>
<span id="button">
<button onclick="min()" class="btn btn-success">-</button><span id="qty"> 1 </span>
<button onclick="plus()" class="btn btn-success">+</button>
</span>
</div>
</div>
</div>
</div>
</section>



<script src="js/buynow.js" type="text/javascript"></script>

<?php 
include("footer.php");
?>