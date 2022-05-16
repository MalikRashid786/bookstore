 <?php
 error_reporting(0);
 include "header.php";
 $msg=$_REQUEST['msg'];
 ?>
 <!DOCTYPE html>
     <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">          
            <title>Registration</title>
            <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css"  href="css/form_style.css">
            <link rel="stylesheet" type="text/css"  href="css/font-awesome.min.css">
            <script  type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
            <script  type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
            <link rel="stylesheet" type="text/css" href="css/animate.min.css">
        </head>
        <body>

<!-------------------
  Alert Message Here
--------------------->
  <?php 
     if($msg==8)
     {
   ?>
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="margin-top: -15px; font-size: 12px;margin-bottom: -29px">
  <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Succcessfuly! Change Password</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  </div>
<?php
   }
if($msg==2)
     {
  ?>
  <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="margin-top: -15px; font-size: 12px;margin-bottom: -29px">
  <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid Email & Password ! Please Check The Email & Password.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
}
 if($msg==4)
     {
  ?>
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="margin-top: -15px; font-size: 12px;margin-bottom: -29px">
  <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Succcessfully! Logout</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
}
 if($msg==9)
     {
  ?>
  <div class="alert alert-success alert-dismissible fade show text-center" role="alert" style="margin-top: -15px; font-size: 12px;margin-bottom: -29px">
  <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Succcessfully! Inserted Data Please Login Here</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
}
?>
<!----------Content Part---------->
            <div class="container">
                 <div class="row">
                 <div class="col-md-5 registrationleft">
                  <img src="images/arrow-204-xxl.png">
                   <h1 style="color: #1C2331">Join Us</h1>
                   <p style="color:#1C2331">Subscribe Easy.you join me and please registration this form click here </p>
                   <a href="reg.php"><button type="button"class="btn primary ">REGISTRATION</button></a>
                 </div>
                 <div class="col-md-2"></div>
                 <div class="col-md-5 registrationright">
                  <br/><br/>
                  <h1 class="text-white animated infinite slideIn wow-delay-8s">Login Here</h1>
  <form action="logincode.php" method="post">
  <div id="inputfiled">
    <i class="fa fa-envelope-o text-white"></i>
    <input type="email" name="email" placeholder=" Email Id" required="true">
  </div>
  <div id="inputfiled">
    <i class="fa fa-key text-white"></i>
    <input type="password" name="password" placeholder=" Password" id="pass" required="true">
    <span class="eye" onclick="hideshow()">
    <i id="hide1" class="fa fa-eye text-white"></i>
    <i id="hide2" class="fa fa-eye-slash text-white"></i>
    </span>
  </div>
    <input type="submit" class="btn" value="LOGIN"/>
    <a href="#">Forget Password</a>
  </form>
            </div>
            </div>
            </div>
            </body>
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
           </script>
     </html>
  <?php
include"footer.php";
  ?>