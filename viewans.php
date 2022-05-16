<?php
session_start();
$qid=$_REQUEST['qid'];
//echo $qid;
include("config.php");
include("userheader.php");
$query="select * from tbl_ans where qid='$qid'";
$res=mysqli_query($conn,$query);

?>
<html>
	<head>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<!--background center start-->
			<div class="row">
				<div class="col-md-3"></div>
				<div class="col-md-6" style="min-height: 500px">
					<br/><br/>
					<h1 align="center">VIEW <span style="color:#ffe082">ANSWER</span></h1>
					<br/>
					<center>
					<?php
						while($row=mysqli_fetch_array($res))
						{
					?>
					<div class="form-row">
  	                <div class="col mb-3">
                     <div class="form-group">
                     <textarea class="form-control" name="ques"  rows="3"><?php echo $row['answer']; ?></textarea>
                     </div>
                     </div>
                      </div>
					<?php
						}
					?>
				</center>
				</div>
				<div class="col-md-3"></div>
			</div>
			<!--background center ends-->
			
		</div>
	</body>
</html>
<?php
include("footer.php");
?>