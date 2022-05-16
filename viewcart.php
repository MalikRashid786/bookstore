<?php
session_start();
include("userheader.php");
include("config.php");
$email=$_SESSION['user'];
if($_SESSION['user']==""){
  session_destroy();
header("location:login.php");
}
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
  $uid=$row['sid'];
}
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
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
<div class="container">
<h1 align="center" class="title">MY <span style="color: #ffe082">CART</span></h1>
<table class="table table-hover  table-striped"style="font-size: 15px">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Book Pic</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Delete</th>
      <th scope="col">Buy Now</th>
    </tr>
  </thead>

  <tbody>
     <?php
$query1="select * from tbl_cart where userid='$uid'";
$res1=mysqli_query($conn,$query1);
$i=1;
while($row1=mysqli_fetch_array($res1))
{
  $proid=$row1['proid'];
  $query2="select * from tbl_product where proid='$proid'";
  $res2=mysqli_query($conn,$query2);
 while($row2=mysqli_fetch_array($res2))
{
?>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
       <td><img src="admin/product/<?php echo $row2['picname'];?>"class="img-fulid" style="height:100px;"/></td>
      <td><?php echo $row2['bname'];?></td>
	    <td><?php echo $row2['price'];?>.00</td>
      <td>1</td>
      <td>&nbsp;&nbsp;&nbsp;<a href="delete.php?pid=<?php echo $proid; ?>"><i class="fa fa-trash"></i></a></td>
  <td><a href="buynow.php?pid=<?php echo $proid; ?>">Buy Now</a></td>
	   
      </tr>
      <?php
$i++; 
}
}
?>
  </tbody>
</table>
</div>
<?php
include("footer.php");
?>