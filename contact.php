<?php
include("header.php");
?>
<head>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/contact.css">
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript"  src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="container">
    <div class="row">
	 <div class="col-md-7" style="margin-bottom: 10px">
	 	<br/><br/>
	<h2 align="center"><span style="">CONTACT</span> US</h2>
	<p align="center">To <span style="color:#4B515D;">Contact</span> Us Pleses Fill The <span style="color: #4B515D">Form Below.</span></p>
  <form action="contactcode.php" method="post">
  	 <div id="inputfiled">
    <input type="text" name="name" placeholder="Enter Name" required="true">
  </div>
  	 <div id="inputfiled">
    <input type="number" name="mobile" placeholder=" Mobile Number" required="true">
  </div>
  <div id="inputfiled">
    <input type="email" name="email" placeholder=" Email Id" required="true">
  </div>
  <div id="inputfiled">
  <textarea name="mssg" class="message" placeholder="Message.."></textarea>
  </div>
  <input type="submit" class="btn1" value="SUBMIT"/>
    </form>
	</div>		
	<div class="col-md-2"></div>
				<div class="col-md-3" style="background-color: rgba(0,0,0,0.5);color: white;border-radius: 10px;margin-top: 40px">
					<br/>
					<h4><i class="fa fa-home" style="color:white;"></i> Our Location</h4>
				<h5>Head Office</h5>
				<p>Softpro Tower<br/>Near New Hanuman Temple<br/>Kaporthala,Aliganj,Lucknnow-226006</p>
		        <b class="h5">Branch Office</b>
		        <p>Softpro House<br/>2/213,Sec-J,Jankipuram,Kursi Road<br/>Near Gudamba Police Station<br/>
		        Lucknow-226021</p>
		        <h5>Coustemer Helpline</h5>
		        <p>+917458847451</p>
		        <b class="h5">Telephone:-</b>
		        <p>+4125666</p>
		        <h5><i class="fa fa-envelope-o" style="color: white"></i> Email Address</h5>
		        <p>enquiry@spibookstore.org</p>
				</div>

			</div>
	</div>
<!----------Google Map Here------------>
	<div class="conatiner" style="height: 400px;margin-top: 90px">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14234.67795370525!2d80.94821!3d26.88224!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x730fe46201abc68a!2sSoftpro+India!5e0!3m2!1sen!2sin!4v1411887056855" width="100%" height="100%"></iframe>
	</div>
</body>
<?php
include "footer.php";
?>