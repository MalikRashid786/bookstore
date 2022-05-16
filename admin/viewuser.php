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

$query="select * from tbl_user";
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
</head>
<br/><br/>
<h1 align="center">VIEW <span style="color: #ffe082">USER'S</span> LIST</h1>
<br/><br/>
<table class="table table-hover table-bordered"style="font-size: 15px;">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Father Name</th>
      <th scope="col">Gender</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Address</th>
      <th scope="col">City</th>
      <th scope="col">Pincode</th>
      <th scope="col">Date</th>
    </tr>
  </thead>
   <?php 
   $i=1;
    while($row=mysqli_fetch_array($res))
    {
   ?>
  <tbody style="font-size: 12px;">
    <tr>
    <td><?php echo $i; ?></td>
    <td><img src="../userupload/<?php echo $row['filename'];?>" style="height: 50px;width: 50px"/></td>
    <th><?php echo $row['name'];?></th>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['mobile'];?></td>
    <td><?php echo $row['address']?></td>
    <td><?php echo $row['city'];?></td>
    <td><?php echo $row['pincode'];?></td>
    <td><?php echo $row['date']; ?></td>
    </tr>
  </tbody>
   <?php
    $i++;
    } 
  ?>
</table>
