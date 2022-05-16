<?php
error_reporting(0);
session_start();
$email=$_SESSION['user'];
if($_SESSION['user']==""){
  session_destroy();
header("location:login.php");
}
include("config.php");
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
  $uid=$row[0];
  $query1="select count(*) as itemno from tbl_cart where userid='$uid'";
  $res1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_array($res1);
$item_no=$row1['itemno'];

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Spi Online Book Store</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
  <style type="text/css">
    #sp{
      color: white;
      font-size: 11px;
      text-decoration: none;
    }
    #sp:hover{
      color: white;
      text-decoration:none; ;
    }
    #userinfo{
      outline: white;
    }
    .list-group a{
      background-color: #4B515D;
      color: white;
    }
    .list-group-item{
       background-color: #4B515D;
    }
    .list-group-item:hover{
     background-color:#1C2331;
      text-decoration: none;
    }
  </style>
</head>
<body>
	<!------------Menu Section ----------------->
<header id="menu">
	<div class="container-fulid">
	<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" >
  <a class="navbar-brand"style="color: white;" href="profile.php"><i><span style="color: orange;font-size: 30px;">S</span>p<span style="color: orange">i</span></i>
  <sup>The</sup>
  <sub style="margin-left:-30px; color: orange">Online<sub> <sub> <sub style="margin-left: -45px; color: #fff; font-size: 8px;">Book Store</sub></sub></sub></sub>
  </a>
   <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="input-group search">
    <input type="search" class="form-control" id="inlineFormInputGroupUsername2" placeholder="Search For Book & More">
    <div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-search"></i></div>
    </div>
<div class="btn-group  text-right">
<button type="button" class="btn ml-3"id="userinfo"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   <img src="userupload/<?php echo $row['filename'];?>" alt="..." class="rounded-circle" style="width: 20px; height: 20px;">
</button>
      <div class="dropdown-menu" style="width:250px;height:300px;margin-left:-190px;background-color:#4B515D;">
      <div class="list-group">
  <p style="color: white;height: 10px;">&nbsp;&nbsp;&nbsp;WELCOME!</p>
  <a href="updateprofile.php" class="list-group-item" id="sp">
   <img src="userupload/<?php echo $row['filename'];?>" alt="..." class="rounded-circle" style="width: 50px; height: 50px;margin-left: -10px">
   <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php  echo $row['name'];?></span>
    </a>
    <a href=change.php class="list-group-item">
   <i class="fa fa-unlock"></i> Change Password</a>
    <a href="updateprofile.php" class="list-group-item "><i class="fa fa-user"></i> Update Profile</a>
    <a href="discuss.php" class="list-group-item"><i class="fa fa-comments"></i> Discussion Board</a>
    <a href="feedback.php" class="list-group-item"><i class="fa fa-paper-plane"></i> Feedback</a>
     </div>
        </div>
       </div>
     </div>
  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
  
      <li class="nav-item active">
        <a class="nav-link" href="profile.php" style="color:white;margin-left: 10px;">Home <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a href="product.php" style="color: white" class="nav-link">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php" style="color: white">Logout</a>
      </li>
      <li class="nav-item">
  <a class="nav-link" href="viewcart.php" style="color: white"><i class="fa fa-shopping-cart" style="font-size: 17px;margin-top:-2px;"></i></a>
      </li>
    <span class="badge"style="padding: 1px;margin-top:5px;margin-left:-13px;color:white;background-color: gray;height: 15px;border-radius: 20px;width: 15px"><?php echo $item_no ?></span>
     <div class="nav-item" id="userinfo" style="width: 300px;height: 300px; background-color:black;z-index: 10;display: none;">
      <a href="#"><i class="fa fa-shopping-cart"></i></a>
    <!-- <a href="#"> <i class="fa fa-bell bell" ></i></a>-->
    <i class="fa fa-user-circle bell"></i>
    <a href="updateprofile.php">Update </a>
    <a href="change.php"> Change </a>
     </div>
   </ul>
  </div>
</nav>
  </div>
</header>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript"  src="js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" ></script>
</body>
</html>

<?php
}
?>