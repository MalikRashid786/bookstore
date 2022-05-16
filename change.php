<?php
error_reporting(0);
session_start();
include ("userheader.php");
if($_SESSION['user']==""){
  session_destroy();
header("location:login.php");
}
$msg=$_REQUEST['msg'];
?>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/change.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <script type="text/javascript" src="js/sweetalert.min.js"></script>
</head>
<body style="overflow-x: hidden;">
		<?php 
     if($msg==7)
     {
	?>
	<div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="margin-top: -15px; font-size: 12px;margin-bottom: -44px">
  <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Worng Password!</strong> You should check in on some of those fields below.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
}?>

<div class="container">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-5">
		<div id="loginform">
		&nbsp;&nbsp;&nbsp;<h1>Change Password</h1>
	<center><i class="fa fa-user" style="font-size:70px; margin-top:-25px;">
	</i></center>
	<form  action="changecode.php" method="post">
	<div id="inputfiled">
		<i class="fa fa-key"></i>
		<input type="password" name="old" placeholder=" Old Password" required="true" id="pass">
		<span class="eye" onclick="hideshow()">
		<i id="hide1" class="fa fa-eye"></i>
		<i id="hide2" class="fa fa-eye-slash"></i>
	    </span>
	</div>
	<div id="inputfiled">
		<i class="fa fa-key"></i>
		<input type="password" name="np" placeholder=" New Password" required="true" id="pass1">
		<span class="eye" onclick="show()">
		<i id="hide3" class="fa fa-eye" style="display: none;"></i>
		<i id="hide4" class="fa fa-eye-slash"></i>
	    </span>
	</div>

	<div id="inputfiled">
		<i class="fa fa-key"></i>
		<input type="password" name="cp" placeholder=" Confirm Password" id="pass2" required="true">
		<span class="eye" onclick="hide()">
		<i id="hide5" class="fa fa-eye" style="display: none;"></i>
		<i id="hide6" class="fa fa-eye-slash"></i>
	    </span>
	</div>
<input type="submit" class="btn btn1" value="change Password" onclick="popup()" >
    </form>
	</div>
	</div>
	<div class="col-md-3"></div>	
</div>
</div>
    <script type="text/javascript">
      function popup(){
        swal({
  title: "Good job!",
  text: "Your Password Changed!",
  icon: "success",
  button: "Ok",
});
   }
 </script>
	<script type="text/javascript">
		function hideshow(){
			var x=document.getElementById("pass");
			var y=document.getElementById("hide1");
			var z=document.getElementById("hide2");
             if(x.type=='password'){
             	x.type ="text";
             	y.style.display="block";
             	z.style.display="none";
             }
             else{
             	x.type ="password";
             	y.style.display="none";
             	z.style.display="block";
             }
		}
		function show(){
			var x=document.getElementById("pass1");
			var y=document.getElementById("hide3");
			var z=document.getElementById("hide4");
             if(x.type=='password'){
             	x.type ="text";
             	y.style.display="block";
             	z.style.display="none";
             }
             else{
             	x.type ="password";
             	y.style.display="none";
             	z.style.display="block";
             }
		}
		function hide(){
			var x=document.getElementById("pass2");
			var y=document.getElementById("hide5");
			var z=document.getElementById("hide6");
             if(x.type=='password'){
             	x.type ="text";
             	y.style.display="block";
             	z.style.display="none";
             }
             else{
             	x.type ="password";
             	y.style.display="none";
             	z.style.display="block";
             }
		}
	</script>
</body>
</html>
<?php
include ("footer.php");
?>