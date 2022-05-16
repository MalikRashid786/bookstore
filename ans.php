<?php
session_start();
//error_reporting(0);
$qid=$_REQUEST['qid'];
//echo $qid;
include("userheader.php");
?>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/page.css" rel="stylesheet" type="text/css"/>
		<link href="css/login.css" rel="stylesheet" type="text/css"/>
		<link href="css/reg.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
<div class="container">
	<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">	
		<br/><br/><br/>
		<h1 align="center">POST <span style="color: #ffe082">ANSWER</span></h1>
		<br/><br/>
	<form action="anscode.php" method="post">
	<input type="hidden" name="qid" value="<?php echo $qid; ?>"/>
  <div class="form-row">
  	<div class="col mb-3">
    <div class="form-group">
    <label style="font-weight: bold;" >Post Answer</label>
    <textarea class="form-control" name="ans"  rows="3" placeholder="Post Answer Here.."></textarea>
  </div>
    </div>
  </div>
  <br/>
 <center> <button class="btn btn-dark" type="submit" >Send</button></center>
 <br/><br/>
</form>
	</div>
	<div class="col-md-3"></div>

</div>
</div>
<?php
include("footer.php");
?>