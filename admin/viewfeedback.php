<?php
include("../config.php");
session_start();
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
  session_destroy();
  header("location:index.php");
}
include("adminheader.php");
$query="select * from tbl_feedback";
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
<h1 align="center">VIEW <span style="color: #ffe082">FEEDBACKS</span> LIST</h1>
<br/><br/>
<table class="table table-hover table-bordered"style="font-size: 15px">
  <thead>
    <tr>
      <th scope="col">S.No.</th>
      <th scope="col">Name</th>
      <th scope="col">Feedback</th>
      <th scope="col">Date & Time</th>
    </tr>
  </thead>
   <?php
   $i=1;
    while($row=mysqli_fetch_array($res))
    {
       $userid=$row['userid'];
       $query1="select * from tbl_user where sid='$userid'";
       $res1=mysqli_query($conn,$query1);
       $row1=mysqli_fetch_array($res1)
   ?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $row1['name'];?></td>
	    <td><?php echo $row['feedback'];?></td>
	    <td><?php echo $row['date'];?></td>
      </tr>
  </tbody>
  <?php
    $i++;
    } 
	?>
  </table>