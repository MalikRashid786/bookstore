<?php
error_reporting(0);
session_start();
if($_SESSION['admin']=="")
{
  session_destroy();
  header("location:index.php");
}



$email=$_SESSION['admin'];
?>
		<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="adminheader.css">
	<style type="text/css">
   .sidepanel a:hover{
    text-decoration: none;
   } 
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light text-center"style="background:linear-gradient(to right,#757575,#ffe082);  ">
   <a class="navbar-brand wow infinte bounce delay-2s"style="color: white;" href="index.php"><i><span style="color: orange;font-size: 30px;">S</span>p<span style="color: orange">i</span></i>
  <sup>The</sup>
  <sub style="margin-left:-30px; color: orange">Online<sub> <sub> <sub style="margin-left: -45px; color: #fff; font-size: 8px;">Book Store</sub></sub></sub></sub>
  </a>
<div id="mySidepanel" class="sidepanel">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()" style="text-decoration: none;">&times;</a>
<a href="addcategory.php">Add Category</a>
<a href="addproduct.php"> Add Products</a>
<a href="viewproduct.php">View Products</a>
<a href="addprodoffer.php">Add Offers</a>
<a href="viewfeedback.php">View feedback</a>
<a href="viewcontact.php">View Contact</a>
<a href="viewuser.php">View user</a>
<a href="change.php">Change Password</a>
<a href="logout.php">Logout</a>
</div>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="profile.php" style="color: white">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>

  <button class="openbtn " id="btn" onclick="openNav()">&#9776;</button>

</nav>
<script type="text/javascript">
  /* Set the width of the sidebar to 250px (show it) */
function openNav() {
  document.getElementById("mySidepanel").style.width = "40%";
  document.getElementById("mySidepanel").style.height = "100%";
  document.getElementById("btn").style.outline="none";
}

/* Set the width of the sidebar to 0 (hide it) */
function closeNav() {
  document.getElementById("mySidepanel").style.width = "0";
}
function btn() {
  document.getElementById("button").style.outline="none";
  document.getElementById("button").style.border="1px solid #ffe082";
}
</script>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript"  src="../js/bootstrap.bundle.min.js"></script>
</body>
