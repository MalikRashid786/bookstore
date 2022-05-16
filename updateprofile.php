<?php
include("userheader.php");
//session_start();
include ("config.php");
$email=$_SESSION['user'];
//echo $email;
if($_SESSION['user']==""){
  session_destroy();
header("location:login.php");
}
$query="select * from tbl_user where email='$email'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res))
{
?>
 <head>
  <link rel="stylesheet" type="text/css"  href="css/registration_style.css">
 </head>
        <body>
         <div class="container">
           <div class="row">
             <div class="col-md-2">
               
             </div>
             <div class="col-md-7">
       <div class="registrationright">
       <a href="#" id="sp">
   <img src="userupload/<?php echo $row['filename'];?>" alt="..." class="rounded-circle" style="width: 80px; height: 80px;">
    </a>
       <h2>Update Profile Here</h2>
       <br/>
    <form class="needs-validation"action="updateprofilecode.php"  method="POST" enctype="multipart/form-data" novalidate>
    	<input type="hidden" name="id" value="<?php echo $row['sid'];?>">
  <div class="form-row">
      <div class="col-md-6 mb-3">
     <input type="text" class="form-control" id="validationCustom01" name="name" value="<?php echo $row['name']; ?>" required>
      <div class="valid-feedback">
      </div>
    </div>
    <div class="col-md-6 mb-3">
      <input type="text" class="form-control" id="validationCustom02" name="fname" value="<?php echo$row['fname'];?>"  required>
      <div class="valid-feedback">
      </div>
    </div>

     <div class="col-md-6 mb-3">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">+91
          </span>
        </div>
        <input type="number"name="mobilenumber" value="<?php echo $row['mobile']; ?>" class="form-control" id="validationCustomUsername"aria-describedby="inputGroupPrepend" required>
        <div class="valid-feedback">
      </div>
      </div>
    </div>

  <div class="col-md-6 mb-3">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
        </div>
      <input type="email" class="form-control" value="<?php echo$row['email'];?>" id="validationCustom03" name="email"  required>
      <div class="valid-feedback">
      </div>
    </div>
</div>

  </div>
  <div class="form-row">
       <div class="col-md-6 mb-3">
    <input type="password" name="password" id="inputPassword6" value="<?php echo $row['password'];?>" class="form-control" aria-describedby="passwordHelpInline"required>
     <div class="valid-feedback">
      </div>
  </div>
  <div class="col-md-6 mb-3">
    <input type="password" name="cpassword" id="inputPassword7" value="<?php echo$row['password']; ?>" class="form-control" aria-describedby="passwordHelpInline"required>
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
      <input type="number" class="form-control" value="<?php echo $row['pincode']; ?>" id="validationTooltip05" name="pin"  required>
      <div class="valid-feedback">
      </div>
    </div>

      <div class="custom-control custom-radio text-white ml-5 mt-2 mb-3">
  <input type="radio" class="custom-control-input" id="customControlValidation2" name="gen" value="male" <?php if($row['gender']=='male'){?> checked <?php }?> required>
    <label class="custom-control-label" for="customControlValidation2">Male</label>
  </div>
  <div class="custom-control custom-radio text-white ml-5 mt-2 mb-3">
    <input type="radio" class="custom-control-input" id="customControlValidation3" name="gen" value="female"<?php if($row['gender']=='female'){?> <?php }?> required>
    <label class="custom-control-label" for="customControlValidation3">Female</label>
    <div class="invalid-feedback"></div>
  </div>
  </div>
  <div class="form-row">
    <div class="col-md-12 mb-3 ml-1">
      <textarea type="text" name="address" class="form-control" id="validationCustom04"required><?php echo $row['address'];; ?></textarea>
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
             <div class="col-md-3"></div>
           </div>
         </div>
    </body>
<?php
}
include ("footer.php");
?>