<?php
session_start();
include("header.php");
if($_SESSION['user']==""){
  session_destroy();
header("location:login.php");
}
include("config.php");
$email=$_SESSION['user'];
//echo $email;
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
//echo $row['0'];
$proid=$_POST['id'];
//echo $proid;
$qty=$_POST['qty'];
//echo $qty;
$price=$_POST['price'];
//echo $price;
$dc=50;
$tp=$price+$dc;
//echo $tp;
?>
<html>
<head>
<style>
.title::before{
  content: ' ';
  background:#ffe082;
  height: 5px;
  width: 200px;
  margin-left: auto;
  margin-right: auto;
  display: block;
  transform: translateY(63px);
}
.title::after
{
  content: ' ';
  background:#ffe082;
  height:10px;
  width: 50px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 40px;
  display: block;
  transform: translateY(8px);
}

</style>
</head>
<body>
<section>
	<div class="container">
		<h1 align="center" class="title">Product<span style="color: #ffe082"> Details</span></h1>
		<br/><br/>
		<div class="row">
			
			<div class="col-md-6">
<form action="save.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Name</label>
   <input type="text" class="form-control" name="username" value="<?php echo $row['name'];?>"readonly/>
    </div>
    <div class="col-md-6 mb-3">
      <label >F'Name</label>
      <input type="text" class="form-control" name="fname" value="<?php echo $row['fname'];?>" readonly>
       </div>
   </div>
  <div class="form-row">
  	  <div class="col-md-6 mb-3">
      <label>Email</label>
    <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>" readonly/>
    </div>
   <div class="col-md-6 mb-3">
      <label >Mobile</label>
     <input type="number" class="form-control" name="num" value="<?php echo $row['mobile'];?>" readonly/>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label >City</label>
     <input type="text" name="city" class="form-control" value="<?php echo $row['city'];?>" readonly/>
    </div>
    <div class="col-md-6 mb-3">
      <label >Pincode</label>
<input type="text" name="pin" class="form-control" value="<?php echo $row['pincode'];?>" readonly/>
    </div>
  </div>
  <div class="form-row">
  	<div class="col mb-3">
    <div class="form-group">
    <label >Address</label>
    <textarea class="form-control"  name="address" rows="1"><?php echo $row['address']; ?></textarea>
  </div>
    </div>
  </div>
    <div class="form-row">
  	<div class="col mb-3">
    <div class="form-group">
    <label >Alternate Address</label>
    <textarea class="form-control"  name="altadd"   rows="3" placeholder="Alternate Here.."></textarea>
  </div>
    </div>
  </div>

</div>
<?php
$query1="select * from tbl_product where proid='$proid'";
$res1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_array($res1);
$pic=$row1['picname'];
//echo $pic;
$bname=$row1['bname'];
//echo $name;

?>
<div class="col-md-6">
<img src="admin/product/<?php echo $pic;?>"/>
<input type="hidden" name="price"value="<?php echo $row1['price'];?>">
<input type="hidden" name="proid" value="<?php echo $proid;?>">
  <div class="form-row">
  <div class="col-md-6 mb-3">
      <label >Name</label>
    <input type="bname" name="name" id="qty" class="form-control" value="<?php echo $bname;?>" readonly/>
    </div>
    <div class="col-md-6 mb-3">
      <label >Qty</label>
   <input type="text" name="qty" class="form-control" id="qty" value="<?php echo $qty;?>" readonly/>
    </div>
</div>
  <div class="form-row">
  <div class="col-md-6 mb-3">
      <label >Delivery Charges</label>
    <input type="text" name="dc" id="qty" value="50" class="form-control" readonly/>
    </div>
    <div class="col-md-6 mb-3">
      <label >Net Amount</label>
   <input type="text" name="tp" id="tp" class="form-control" value="<?php echo $tp;?>" readonly/>

    </div>
    <input type="submit" value="continue" style="float:right;margin-top:20px;margin-right:100px;height:50px;font-size:16px;color:orange;border:1px solid#037ec4;border-radius:25px;width:180px;"/>
</div>



</div>
</form>
</div>
</div>
</section>


<?php
include("footer.php");
?>