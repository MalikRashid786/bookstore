<?php
include("../config.php");
include("adminheader.php");
session_start();
$email=$_SESSION['admin'];
if($_SESSION['admin']=="")
{
  session_destroy();
  header("location:index.php");
}
$query="select * from tbl_category";
$res=mysqli_query($conn,$query);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<br/><br/>
				<h1 align="center">Add <span style="color:#ffe082 ">Products</span></h1>
				<br/>
 <form action="addcode.php" method="post" enctype="multipart/form-data">
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label>Book name</label>
      <input type="text" name="bname" class="form-control"  placeholder="Book Name"required>
    </div>
    <div class="col-md-6 mb-3">
      <label >Author Name</label>
      <input type="text" name="author" class="form-control"  placeholder="Author Name"required>
    </div>
  </div>
  <div class="form-row">
  	  <div class="col-md-6 mb-3">
      <label>Category</label>
      <select class="form-control" name="cate">
        <option selected value="">Choose...</option>
			<?php 
			while($row=mysqli_fetch_array($res))
			{
			?>
			<option value="<?php echo $row['cateid'];?>"><?php echo $row['category'];?></option>
			<?php 
             }
			?>>
      </select>
    </div>
    <div class="col-md-6 mb-5"style="margin-top: 32px;">
       <input  type="file" name="file" class="custom-file-input" id="validatedCustomFile" required>
    <label class="custom-file-label">Choose file...</label>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label >Price</label>
      <input type="text" name="price" class="form-control"  placeholder="Price" required>
    </div>
    <div class="col-md-6 mb-3">
      <label >Quantity</label>
      <input type="number" name="qut" class="form-control" placeholder="Quantity" required>
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-3">
      <label >Rating</label>
      <input type="text" name="rating" class="form-control"  placeholder="Rating" required>
    </div>
    <div class="col-md-6 mb-3">
      <label >Old price</label>
      <input type="number" name="oldprice" class="form-control" placeholder="Old Price" required>
    </div>
  </div>
   <div class="form-row">
    <div class="col-md-6 mb-3">
      <label >Off</label>
      <input type="text" name="off" class="form-control"  placeholder="% Off" required>
    </div>
    <div class="col-md-6 mb-3">
      <label >Special</label>
      <input type="text" name="special" class="form-control" placeholder="Special % Off" required>
    </div>
  </div>
  <div class="form-row">
  	<div class="col mb-3">
    <div class="form-group">
    <label >Description</label>
    <textarea class="form-control" name="description"  rows="3" placeholder="Description Here.."></textarea>
  </div>
    </div>
  </div>
 <center> <button class="btn btn-dark" type="submit" >Add product</button></center>
</form>
</div>
		<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>