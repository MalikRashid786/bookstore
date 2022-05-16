<?php
include("adminheader.php");
include("../config.php");
session_start();
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
  session_destroy();
  header("location:index.php");
}
$query="select * from tbl_category";
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
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript"  src="../js/bootstrap.bundle.min.js"></script>
    <style type="text/css">
    	a:hover{
    		color:white;
    	}
    </style>
</head>

<div class="container">
	<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
	<br/>
	<h1 align="center">ADD <span style="color:#ffe082">CATEGORY</span></h1>
	<br/>
	<form action="catecode.php" method="post">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" name="cate" placeholder="Enter Category">
      <br/>
      <center> <button type="submit" class="btn btn-dark">A D D</button></center>
    </div>
 </div>
</form>
</div>
<div class="col-md-4"></div>
</div>
</div>
<br/><br/><br/></br>
<hr/>
<h3 align="center">VIEW <span style="color: #ffe082">CATEGORY</h3>
	<br/><br/>
<table class="table table-hover table-bordered">
  <thead>
  	<tr>
 		<th scope="col">S.NO.</th>
		<th scope="col">CATEGORY</th>
		<th scope="col">DATE</th>
	</tr>
  <?php 
    $i=1;
    while($row=mysqli_fetch_array($res)){
  ?>
	<tr>
		<td><?php echo$i;?></td>
		<td><?php echo $row['category'];?></td>
		<td><?php echo $row['date'];?></td>
	</tr>
	<?php
	$i++;
     }
	?>
</table>