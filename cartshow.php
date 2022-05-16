<?php
include('config.php');
$query="select * from tbl_cart";
$res=mysqli_query($conn,$query);
?>

<?php 
$i=1;
while($row=mysqli_fetch_array($res))
{
?>
<tr>
	<td><?php $i;?></td>
	<td><?php echo $row[''];?></td>
	<td><?php echo $row['description'];?></td>
	<td><?php echo $row['price'];?></td>
</tr>
<?php
$i++;
}
?>
</table>