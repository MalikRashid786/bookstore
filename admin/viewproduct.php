<?php
include("../config.php");
include("adminheader.php");
session_start();
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
  session_destroy();
  header("location:index.php");
}
$query="select * from tbl_product";
$res=mysqli_query($conn,$query);
?>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript"  src="js/bootstrap.bundle.min.js"></script>
</head>
<br/><br/>
<h1 align="center">VIEW <span style="color: #ffe082">PRODUCTS</span> LIST</h1>
<br/><br/>
<table class="table table-hover table-bordered"style="font-size: 15px">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Pic</th>
      <th scope="col">Book Name</th>
      <th scope="col">Author</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Category</th>
      <th scope="col">Desceiption</th>
      <th scope="col">Date &</th>
    </tr>
  </thead>
   <?php
   $i=1;
    while($row=mysqli_fetch_array($res))
    {
       $cateid=$row['cateid'];
       $query1="select * from tbl_category where cateid='$cateid'";
       $res1=mysqli_query($conn,$query1);
       $row1=mysqli_fetch_array($res1)
   ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><img src="product/<?php echo $row['picname'];?>" height="50px" width="50px"></td>
      <td><?php echo $row['bname'];?></td>
      <td><?php echo $row['author'];?></td>
      <td><?php echo $row['quantity'];?></td>
	    <td><?php echo $row['price'];?></td>
	    <td><?php echo $row1['category'];?> </td>
	    <td><?php echo $row['description'];?></td>
	    <td><?php echo $row['date'];?></td>
      </tr>
  </tbody>
  <?php
    $i++;
    } 
	?>
</table>