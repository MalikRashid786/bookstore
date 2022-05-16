<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SPI Book Store</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	
</head>
<body>
	<!------------Menu Section -------------------->

<header id="menu">
	<div class="container-fulid">
	<nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top" >
  <a class="navbar-brand wow infinte bounce delay-2s"style="color: white;" href="index.php"><i><span style="color: orange;font-size: 30px;">S</span>p<span style="color: orange">i</span></i>
  <sup>The</sup>
  <sub style="margin-left:-30px; color: orange">Online<sub> <sub> <sub style="margin-left: -45px; color: #fff; font-size: 8px;">Book Store</sub></sub></sub></sub>
  </a>
  <button class="navbar-toggler btn" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <form action="genralproduct.php" method="post">
  <div class="input-group search">
    <input type="search" class="form-control" name="search" placeholder="Search For Book & More">
    <button type="submit"><div class="input-group-prepend">
      <div class="input-group-text"><i class="fa fa-search"></i></div>
    </div></button>
  </div>
</form>
  <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
  
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color:white;margin-left: 10px;">Home <span class="sr-only">(current)</span></a>
      </li>
        <li class="nav-item">
        <a href="genralproduct.php" style="color: white" class="nav-link">Products</a>
      </li>
       <li class="nav-item">
        <a href="aboutus.php" style="color: white" class="nav-link">About&nbsp;Us</a>
      </li>
       <li class="nav-item">
        <a href="contact.php" style="color: white" class="nav-link">Contact&nbsp;Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php" style="color: white">Login</a>
      </li>
      <a href="login.php"><i class="fa fa-shopping-cart"></i></a>
     <a href="#"> <i class="fa fa-bell bell" style="margin: 10px; color: white;" ></i></a>
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