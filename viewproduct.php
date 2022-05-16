<?php
include("../config.php");
session_start();
if($_SESSION['user']==""){
  session_destroy();
header("location:login.php");
}
$query="select * from tbl_product";
$res=mysqli_query($conn,$query);
?>
<table border="1">
	<tr>
		<th>S.No.</th>
		<th>PIC</th>
		<th>BOOK NAME</th>
		<th>AUTHOR</th>
		<th>QUANTITY</th>
		<th>PRICE</th>
		<th>DESCRIPTION</th>
        <th>DATE</th>
	</tr>
  <?php 
   $i=1;
    while($row=mysqli_fetch_array($res))
    {
   ?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $row['picname'];?></td>
		<td><?php echo $row['bname'];?></td>
		<td><?php echo $row['author'];?></td>
		<td><?php echo $row['quantity'];?></td>
		<td><?php echo $row['price'];?></td>
		<td><?php echo $row['description'];?></td>
		<td><?php echo $row['date'];?></td>
	</tr>
	<?php
    $i++;
    } 
	?>
</table>