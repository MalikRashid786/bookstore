<?php
include('../config.php');
session_start();
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
  session_destroy();
  header("location:index.php");
}
$query="select * from tbl_buy";
$res=mysqli_query($conn,$query);
include("adminheader.php");
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript"  src="js/bootstrap.bundle.min.js"></script>
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
<div class="container-fulid">
<h1 align="center" class="title">VIEW <span style="color: #ffe082">SELL PRODUCRS</span></h1>
<table class="table table-hover  table-striped"style="font-size: 15px">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">F'Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th  scope="col">Pin</th>
      <th scope="col">Alternate Address</th>
      <th scope="col">Book Name</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">DC</th>
      <th scope="col">Total</th>
      <th scope="col">Date&Time</th>
    </tr>
  </thead>

  <tbody>

 <?php
  $i=1; 
    while($row=mysqli_fetch_array($res))
    {
  ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <th><?php echo $row['name'];?></th>
      <td><?php echo $row['fname'];?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['mobile'];?></td>
      <td><?php echo $row['address']?></td>
      <td><?php echo $row['city'];?></td>
      <td><?php echo$row['pin'];?></td>
      <td><?php echo $row['altadd'];?></td>
      <td><?php echo $row['bname'];?></td>
      <td><?php echo $row['price'];?></td>
      <td><?php echo $row['qty'];?></td>
      <td><?php echo $row['dc']; ?></td>
      <td><?php echo $row['total'];?></td>
    <td><?php echo $row['date']; ?></td>
    </tr>
  </tbody>
  <?php
$i++;
}
?>
  </tbody>
</table>
</div>