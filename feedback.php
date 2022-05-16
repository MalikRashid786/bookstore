<?php
error_reporting(0);
session_start();
$f=$_REQUEST['f'];
include("userheader.php");
if($_SESSION['user']==""){
  session_destroy();
header("location:login.php");
}
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
<style type="text/css">
	body{
		background-image: url('images/banne.jpg');
		background-size: 100% 100%;
	}
</style>
</head>
<?php

    if($f==1)
     {
  ?>
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="margin-top: -15px; font-size: 12px;margin-bottom: -29px;z-index: 10">
  <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Thank You  !</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
}?>
<div class="container">
<div class="row">
	<div class="col-md-3"></div>
	<br/><br/> <br/>
	<div class="col-md-6" style="min-height: 500px;background-color: rgba(0,0,0,0.4);">

 <form action="feedcode.php" method="post">
<h1 style="color: #fff;" align="center">FEEDBACK</h1>
<br/><br/><br/><br/><br/>
 <div class="form-row">
  	<div class="col mb-3">
    <div class="form-group">
    <label style="color: #fff; font-weight: bold; font-size: 
    20px">Feedback Here</label>
    <textarea class="form-control" name="feed"   rows="3" placeholder=" Write Feedback Here.." required="true"></textarea>
  </div>
    </div>
  </div>
  <button class="btn btn-dark" type="submit">Send</button>

</form>
	</div>
	<div class="col-md-3"></div>
</div>
</div>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript"  src="js/bootstrap.bundle.min.js"></script>
<?php
include("footer.php");
?>