  <?php
  include("header.php");
  error_reporting(0);
  $msg=$_REQUEST['msg'];
 ?>
 <!DOCTYPE html>
     <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Registration</title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css"  href="css/bootstrap.min.css">
             <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
            <link rel="stylesheet" type="text/css"  href="css/registration_style.css">
        </head>
        <body>
         <div class="container">
        <?php
if($msg==13)
     {
  ?>
  <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="margin-top: -15px; font-size: 12px;margin-bottom: -29px">
  <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invalid Confirm Password ! Please Check Confirm Password.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
}
if($msg==12)
     {
  ?>
  <div class="alert alert-danger alert-dismissible fade show text-center" role="alert" style="margin-top: -15px; font-size: 12px;margin-bottom: -29px">
  <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email already registered ! Please Check your email.</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php
}
?>
           <div class="row">
             <div class="col-md-2">
               
             </div>
             <div class="col-md-7">
       <div class="registrationright">
       <i class="fa fa-users"></i>
       <h2>Registration Here</h2>
    <form class="needs-validation"action="regiscode.php"  method="POST" enctype="multipart/form-data" novalidate>
  <div class="form-row">
      <div class="col-md-6 mb-3">
      <input type="text" class="form-control" id="validationCustom01" name="name" placeholder="Your Name"  required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <input type="text" class="form-control" id="validationCustom01" name="fname" placeholder="Father Name"  required>
      <div class="valid-feedback">
      </div>
    </div>

     <div class="col-md-6 mb-3">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">+91
          </span>
        </div>
        <input type="number"name="mobilenumber" class="form-control" id="validationCustomUsername" placeholder="Mobile Number" aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
      </div>
      </div>
    </div>

  <div class="col-md-6 mb-3">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
      <input type="email" class="form-control" id="validationCustom01" name="email" placeholder="example@gmail.com"  required>
      <div class="valid-feedback">
      </div>
    </div>
</div>

  </div>
  <div class="form-row">
       <div class="col-md-6 mb-3">
    <input type="password" name="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Password" required>
     <div class="valid-feedback">
      </div>
  </div>
  <div class="col-md-6 mb-3">
    <input type="password" name="cpassword" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline" placeholder="Confirm Password" required>
       <!--- <?php if($msg=1){?>
     <span style="color: red">Invalid Password</span>
    <?php }?>-->
    <div class="valid-feedback">
      </div>
  </div>
</div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
    <select class="custom-select" name="city" required>
  <option  required value="">--Select--</option>
  <option  required value="lucknow">Lucknow</option>
  <option  required value="delhi">Delhi</option>
  <option  required value="gonda">Gonda</option>
  <option  required value="allahabad">Allahabad</option>
   <div class="valid-feedback">
      </div>
</select>
</div>
<div class="col-md-6 mb-3">
  <div class="custom-file">
  <input type="file" value="image" name="file" class="custom-file-input" id="customFile" required>
  <div class="valid-feedback">
  </div>
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
</div>
</div>
<div class="form-row">
     <div class="col-md-6 mb-3">
      <input type="number" class="form-control" id="validationTooltip05" name="pin" placeholder="Pincode"  required>
      <div class="valid-feedback">
      </div>
    </div>

      <div class="custom-control custom-radio text-white ml-5 mt-2 mb-3">
    <input type="radio" class="custom-control-input" id="customControlValidation2" name="gen" value="male" required>
    <label class="custom-control-label" for="customControlValidation2">Male</label>
  </div>
  <div class="custom-control custom-radio text-white ml-5 mt-2 mb-3">
    <input type="radio" class="custom-control-input" id="customControlValidation3" name="gen" value="female" required>
    <label class="custom-control-label" for="customControlValidation3">Female</label>
    <div class="invalid-feedback"></div>
  </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3 ml-1">
      <textarea type="text" name="address" class="form-control" id="validationCustom01" placeholder="Address. . ."required></textarea>
    </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
       <button class="btn btn-primary" type="submit" name="">Registration</button>
    </div>
  </div>
</form>

<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
          </div>
             </div>
             <div class="col-md-3">
               
             </div>
           </div>
         </div>
      <script  type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.bundle.min"></script>
    </body>
     </html>
     <?php
     include("footer.php");

  ?>