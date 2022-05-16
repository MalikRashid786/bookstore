<?php
include("header.php");
include("config.php");
//echo $cateid;
$query="select * from tbl_product order by proid desc limit 12";
$res=mysqli_query($conn,$query);
$query1="select * from tbl_category";
$res1=mysqli_query($conn,$query1);
?>
<link rel="stylesheet" type="text/css" href="css/index.css">
<link rel="stylesheet" type="text/css" href="css/aos.css">
<link rel="stylesheet" type="text/css" href="css/popper.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/animate.min.css">
<script type="text/javascript" src="js/wow.min.js"></script>
</head>
<body>
<section id="slider">
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/1158247_in_books_amazon_stories_changes_19_1242x350_1548975879.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/xcm_manual-1175404_memorablebooks-summer-2019_440x300_3-n_1561382971.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/newb12-1920x640.png" class="d-block w-100" alt="...">
    </div>
  <div class="carousel-item">
      <img src="images/chuttersnap-TYppdH5ages-unsplash.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/freddie-marriage-w8JiSVyjy-8-unsplash.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images/newb12-1920x640.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>  
  <!-- Example single danger button -->
<section id="btnmenu">
<div class="container">
<div class="row">
  <?php
  while($row1=mysqli_fetch_array($res1))
{
?>
  <ul class="nav"style="display: inline-block;">
  <li class="nav-item" style="margin-left: 60px;padding: 10px">
    <a class="nav-link" href="genralproductshow.php?cateid=<?php echo $row1['cateid'];?>"><?php echo $row1['category']; ?></a>
  </li>
</ul>
<?php 
} 
?>
  </div>
</div>
</section>
<!----------------content Section---------------------->
<section id="content">
  <br/>
  <h1 class="title" align="center">Papulor Products</h1>
<div class="container">
<?php
while($row=mysqli_fetch_array($res))
{
?>
  <div class="col-3-lg" style="display:inline-grid;">
    <div class="card  ml-1 mt-3" style="width:11rem;">
    <img src="admin/product/<?php echo $row['picname'];?>" class="card-img-top" alt="..." style="height:200px"/>
    <div class="card-body" style="height: 200px;">
      <h6 class="card-title "><a href=""><?php echo $row['bname'];?></a></h6>
      <p class="card-text"  style="font-size: 15px"><?php echo $row['author'];?></p>
      <a href="#" class="badge badge-success"  style="font-size: 10px"><?php echo $row['rating']; ?>*</a><span  style="font-size: 12px">(<?php echo $row['quantity']?>)</span>
      <b  style="font-size: 10px">&#8377;<?php echo $row['price']; ?>&nbsp;</b><strike  style="font-size: 10px">&#8377;<?php echo $row['oldprice'];?></strike><span   style="font-size: 10px">&nbsp;&nbsp;<?php echo $row['off'];?>Off</span>
      <b   style="font-size: 13px"><span style="color: green"><?php echo $row['special']; ?></b>
      <button class="btn "><a href="login.php"><i class="fa fa-shopping-cart" style="font-size: 17px;margin-top:-2px;"></i></a></button>
      <button class="btn" style=""><a href="login.php" >Buy</a></button>

    </div>
  </div>
    </div>
    <?php
   }
    ?>
  </div>
</section>
<!-------------banner section----------------->

<section id="banner" style="">
  <center>
   <h1 class="title">Latest Book</h1>
  </center>
  <a href="genralproduct.php"><div class="container"></div></a>
</section>
<section>
<!--CSS Spinner-->
<div class="spinner-wrapper">
<div class="spinner">
  <div class="d-flex justify-content-center" style="margin-top:300px;">
  <div class="spinner-border" style="width: 5rem;height: 5rem" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
</div>
</div>
</section>
<script src="js/wow.min.js"></script>
<script>
$(document).ready(function() {
//Preloader
$(window).on("load", function() {
preloaderFadeOutTime = 2000;
function hidePreloader() {
var preloader = $('.spinner-wrapper');
preloader.fadeOut(preloaderFadeOutTime);
}
hidePreloader();
});
});
</script>
<script>
new WOW().init();
</script>
</body>
</html>
<?php
include ("footer.php");
?>