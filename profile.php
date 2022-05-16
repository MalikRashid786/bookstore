<?php
session_start();
if($_SESSION['user']==""){
session_destroy();
header("location:login.php?msg=3");
}
include ("userheader.php");
include("config.php");
$query="select * from tbl_category";
$res=mysqli_query($conn,$query);
$query1="select * from tbl_product";
$res1=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/popper.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<script type="text/javascript" src="js/wow.min.js"></script>
  <style type="text/css">
  	@font-face {
  font-family: "ElMessiri-SemiBold";
  src: url("../fonts/el_messiri/ElMessiri-SemiBold.ttf"); }
  @font-face {
  font-family: "Montserrat-Regular";
  src: url("../fonts/montserrat/Montserrat-Regular.ttf"); }
  @font-face {
  font-family: "Montserrat-SemiBold";
  src: url("../fonts/montserrat/Montserrat-SemiBold.ttf"); }
  body{
  		font-family: "ElMessiri-SemiBold";
  }
  </style>

</head>
<body>
  <?php
  while($row=mysqli_fetch_array($res))
{
?>
  <ul class="nav"style="display: inline-block;">
  <li class="nav-item" style="margin-left: 90px">
    <a class="nav-link" href="productshow.php?cateid=<?php echo $row['cateid'];?>"><?php echo $row['category']; ?></a>
  </li>
</ul>
<?php 
} 
?>
<!----------------content Section---------------------->
<section id="content">
<div class="container">
        <?php 
while($row1=mysqli_fetch_array($res1))
{
  if($row1['quantity']==0)
  {
  ?>
  <div class="col-3-lg" style="display:inline-grid;">
    <div class="card mt-3" style="width:11rem;">
      <div class="btn" style="position: absolute;background-color:#CC0000;color:white;top:200px;z-index:1;width:11rem">
     Out Of Stock
      </div>
    <img src="admin/product/<?php echo $row1['picname'];?>" class="card-img-top" alt="..." style="height:200px;opacity: 0.2"/>
    <div class="card-body" style="height: 200px;opacity: 0.2">
      <h6 class="card-title "><a href=""><?php echo $row1['bname'];?></a></h6>
      <p class="card-text"style="font-size: 15px"><?php echo $row1['author'];?></p>
      <a href="#" class="badge badge-success" style="font-size: 10px"><?php echo $row1['rating'];?>*</a> (<?php echo $row1['quantity'];?>)
      <b  style="font-size: 10px">$<?php echo $row1['price'];?>&nbsp;</b><strike  style="font-size: 10px">$<?php echo $row1['oldprice'];?></strike><span  style="font-size: 10px">&nbsp;&nbsp; <?php echo $row1['off']; ?> Off</span>
      <b   style="font-size: 13px"><span style="color: green"><?php echo $row1['special'];?></span></b>
         <button class="btn "><a href="cart.php?pid=<?php echo $row1['proid'];?>"><i class="fa fa-shopping-cart" style="font-size: 17px;margin-top:-2px;"></i></a></button>
      <button class="btn" style=""><a href="buynow.php?pid=<?php echo $row1['proid'];?>">Buy</a></button>
    </div>
  </div>
    </div>
    <?php
   }
   else
   {
    ?>
    <div class="col-3-lg" style="display:inline-grid;">
    <div class="card mt-3" style="width:11rem;">
    <img src="admin/product/<?php echo $row1['picname'];?>" class="card-img-top" alt="..." style="height:200px"/>
    <div class="card-body" style="height: 200px;">
      <h6 class="card-title "><a href=""><?php echo $row1['bname'];?></a></h6>
      <p class="card-text"style="font-size: 15px"><?php echo $row1['author'];?></p>
      <a href="#" class="badge badge-success" style="font-size: 10px"><?php echo $row1['rating'];?>*</a> (<?php echo $row1['quantity'];?>)
      <b  style="font-size: 10px">$<?php echo $row1['price'];?>&nbsp;</b><strike  style="font-size: 10px">$<?php echo $row1['oldprice'];?></strike><span  style="font-size: 10px">&nbsp;&nbsp; <?php echo $row1['off']; ?> Off</span>
      <b   style="font-size: 13px"><span style="color: green"><?php echo $row1['special']; ?></span></b>
         <button class="btn "><a href="cart.php?pid=<?php echo $row1['proid'];?>"><i class="fa fa-shopping-cart" style="font-size: 17px;margin-top:-2px;"></i></a></button>
      <button class="btn" style=""><a href="buynow.php?pid=<?php echo $row1['proid'];?>">Buy</a></button>
    </div>
  </div>
    </div>
    <?php
  }
}?>
  </div>
</section>
</body>
</html>
<?php 
include ("footer.php");
?>