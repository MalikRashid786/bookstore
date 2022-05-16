<?php
include("adminheader.php");
session_start();
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
  session_destroy();
  header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="adminheader.css">
	<style type="text/css">
		.btn{
             background-color: rgba(0,0,0,0.9);

        }
        a{
          color: white;
        }
	</style>
	</head>
<body>
 <div class="header  py-7 py-lg-8" style=" background:linear-gradient(to right,#757575,#ffe082);;height:330px;boder:none;">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
            	<br/><br/>
              <h1 class="text-white">Change Password!</h1>
              <p class="text-lead text-white">.</p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
 <div  style=" background:linear-gradient(to right,#757575,#ffe082);border-color:#6D6AE4">
<div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100" fill="#1C2331"></polygon>
        </svg>
 </div>
</div>
<section style="background-color: #1C2331;">
  <div class="container mt--8 pb-5" >
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7" style="margin-top: -190px;">
          <div class="card shadow border-0">
            <div class="card-header bg-transparent pb-5" style="margin-top:20px;">
              <div class="text-muted text-center mt-2 mb-3">
              	<i class="fa fa-user" style="font-size: 100px;color:#1C2331;"></i>
              </div>
          
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <form role="form" action="changecode.php" method="post">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                    </div>
                    <input class="form-control" placeholder="Old Password" name="op" type="password">
                  </div>
                </div>
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                    </div>
                    <input class="form-control" placeholder="New Password" name="np" type="password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fa fa-key"></i></span>
                    </div>
                    <input class="form-control" placeholder="Confirm Password"  name="cp" type="password">
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn text-white my-4" style="background-color: rgba(0,0,0,0.9);">Change Password</button>
                </div>
              </form>
            </div>
          </div>
      
        </div>
      </div>
    </div>
</section>
  <footer class="footer"style="background-color: #1C2331;">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
              &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">MD Rashid</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">MD Rashid</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link" target="_blank"> License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
      <script type="text/javascript">
      	
      </script>
<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript"  src="../js/bootstrap.bundle.min.js"></script>
</body>
</html>