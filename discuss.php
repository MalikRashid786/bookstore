<?php
include("config.php");
include("userheader.php");
session_start();
$query="select * from tbl_ques";
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
				<h1 align="center">Discussion <span style="color:#ffe082 ">Here</span></h1>
				<br/>
 <form action="ques.php" method="post" enctype="multipart/form-data">
 
  <div class="form-row">
  	<div class="col mb-3">
    <div class="form-group">
    <label >Discussion Here</label>
    <textarea class="form-control" name="ques"  rows="3" placeholder="Asked Question Here.."></textarea>
  </div>
    </div>
  </div>
 <center> <button class="btn btn-dark" type="submit" >Send</button></center>
 <br/><br/>
</form>
</div>
<table class="table table-hover table-secondary  table-striped">
  <tr>
    <th scope="col">S.NO.</th>
    <th scope="col">USER WHO ASKED</th>
    <th scope="col">QUESTION</th>
    <th scope="col">POST ANSWER</th>
    <th scope="col">VIEW ANSEWR</th>
  </tr>
  <?php 
  $i=1;
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $i;?></td>
    <?php 
     $uid=$row['uid'];
     $query2="select * from tbl_user where sid='$uid'";
     $res2=mysqli_query($conn,$query2);
     if($row2=mysqli_fetch_array($res2))
     {
      $name=$row2['1'];
     }
    ?>
    <td><?php echo $name;?></td>
    <td><?php echo $row['ques'];?></td>
    <td><a href="ans.php?qid=<?php echo $row['0'];?>">POST ANSWER</a></td>
     <td><a href="viewans.php?qid=<?php echo $row['0'];?>">VIEW ANSWER</a></td>
  </tr>

  <?php
$i++;
}
  ?>
</table>
		<div class="col-md-3"></div>
		</div>
	</div>
</body>
</html>

<?php
include ("footer.php");
?>