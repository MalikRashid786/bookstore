<?php
session_start();
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
  session_destroy();
  header("location:index.php");
}
include("adminheader.php");
include ("../config.php");
$query="select count(sid) as cuser from tbl_user";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_array($res);
$users=$row['cuser'];

$query1="select count(proid) as procount from tbl_product";
$res1=mysqli_query($conn,$query1);
$row1=mysqli_fetch_array($res1);
$procount=$row1['procount'];

$query2="select count(*) as buycount from tbl_buy";
$res2=mysqli_query($conn,$query2);
$row2=mysqli_fetch_array($res2);
$sellcount=$row2['buycount'];

$query3="select * from tbl_buy";
$res3=mysqli_query($conn,$query3);
$sum=0;
while($row3=mysqli_fetch_array($res3))
{
  $sum=$sum+$row3['price'];
}
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="../css/font-awesome.min.css">
	<script type="text/javascript" src="../js/jquery-3.3.1.min.js"></script>
<script type="text/javascript"  src="../js/bootstrap.bundle.min.js"></script>

<style type="text/css">
.card .sp{
	margin-top: 20px;
	font-size: 55px
}
.ship{
    background-color: #4B515D;
    color: white;
    margin-bottom: 20px;
}
.ship:hover{
	 background-color: black;
     color: white;

}
.shi{
	background-color: #1C2331;
	color: white;
	margin-bottom: 20px;
}
.shi:hover{
         background-color:black	 ;
	     color: white;
}
.shi a{
	text-decoration: none;	
	color: white;
}
.shi a:hover{
	text-decoration: none;	
	color: white;
	background-color:black	
}
.ship a{
	text-decoration: none;	
	color: white;
}
.ship a:hover{
	text-decoration: none;	
	color: white;
	background-color:black	
}
.fa-plus{
	margin-right: 10px;
	font-size: 40x;
	margin-top: -10px;

}
.counter{
	position: sticky;
	font-size: 30px;
}
</style>

</style>
</head>
<body>
	<br/>
	<h1 align="center">Welcome !<br/><span style="color: #ffe082"> To Dashboard</h1>
	  <section class="dashboard">
        <div class="container d-lg-flex">
            <div class="col-lg-4 text-center">
                <div class="card shi"><span class="fa fa-users sp" aria-hidden="true"></span>
                <div class="card-body">
                	<a href="viewuser.php">
                    <h3>USERS</h3>
                    <p>Our All User over</p>
                   <span class="fa fa-plus"></span><span class="counter text-center"><?php echo $users;
                   ?></span>
                   </a>
                 </div>
                 </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="card ship"><span class="fa fa-book sp" aria-hidden="true"></span>
                <div class="card-body">
                	<a href="viewproduct.php">
                    <h3>TOTAL PRODUCTS</h3>
                    <p>Our All Products</p>
                    <span class="fa fa-plus"></span><span class="counter text-center"><?php echo $procount;
                   ?></span>
                   </a>
                </div>
            </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="card shi"> <span class="fa fa-gift sp" aria-hidden="true"></span>
                   <div class="card-body">
                   	<a href="sellproduct.php">
                    <h3>SELL PRODUCTS</h3>
                    <p>Total Sell Products</p>
                     <span class="fa fa-plus"></span><span class="counter text-center"><?php echo $sellcount;
                   ?></span>
                    </a>
                </div>
            </div>
            </div>
        </div>
         <div class="container d-lg-flex">
           <div class="col-lg-4"></div>
           <div class="col-lg-4 text-center">
                <div class="card shi"><span class="fa fa-rupee sp" aria-hidden="true"></span>
                <div class="card-body">
                                <h3>INCOME</h3>
                    <p>Our Total Income over</p>
                   <span class="fa fa-plus"></span><span class="counter text-center"><?php echo $sum;
                   ?></span>
            
                 </div>
                 </div>
            </div>
        </div>
    </section>
<script type="text/javascript" src="js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="js/jquery.waypoints.min.js"></script>
    <script>
    	jQuery(document).ready(function()
    	{$('.counter').counterUp({
    delay: 10,
    time: 1000
});
    	});
    </script>
</body>