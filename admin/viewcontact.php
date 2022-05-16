<?php
include('../config.php');
session_start();
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
  session_destroy();
  header("location:index.php");
}
$query="select * from tbl_contact";
$res=mysqli_query($conn,$query);
include("adminheader.php");
?>

    <head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	</head>
  <br/>
<h1 align="center">VIEW <span style="color:#ffe082">CONTACT</span> LIST</h1>
<br/>
<table class="table table-hover table-bordered" style="font-size: 15px">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Message</th>
      <th scope="col">Date  & time</th>
    </tr>
  </thead>
  <?php
	$i=1; 
    while($row=mysqli_fetch_array($res))
    {
	?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row['name'];?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['mobile'];?></td>
      <td><?php echo $row['message']?></td>
	    <td><?php echo $row['date']; ?></td>
    </tr>
  </tbody>
  <?php
$i++;
}
?>
</table>
