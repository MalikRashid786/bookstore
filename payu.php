<?php
session_start(); 
include("config.php");
$email=$_SESSION['user'];
$tp=$_REQUEST['tp'];



$query="select * from tbl_user where email='$email'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
$user_id=$row['sid'];
$address=$row['address'];
$mobile=$row['mobile'];
$name=$row['name'];
//echo $user_id,$address,$mobile,$name;


	
$query9="select * from tbl_cart where userid='$user_id'";
$res9=mysqli_query($conn,$query9);
$row9=mysqli_fetch_assoc($res9);
//$amount=$row9['product_cost'];


?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head >
</head>
<body  align="center" bgcolor="lightblue">
<h1>PayUMoney Payment Request Form </h1>
<form action="proceed.php" align="center" name="payuform" method="POST" >
<input type="hidden" name="key" value="" />
<input type="hidden" name="txnid" value=""/>
<table border="1px solid" align="center">
<tr>
<td><b>Mandatory Parameters</b></td>
</tr>
<tr>
<td>Amount: </td>
<td><input name="amount" value="<?php echo $tp;  ?>" readonly="true"/></td>
<td>First Name: </td>
<td><input name="firstname" id="firstname" value="<?php echo $name;?>" readonly="true" /></td>
</tr>
<tr>
<td>Email: </td>
<td><input name="email" id="email" value="<?php echo $email;?>" readonly="true"  /></td>
<td>Phone: </td>
<td><input name="phone"  value="<?php echo $mobile;?>" readonly="true"/></td>
</tr>
<tr>
<td>Product Info: </td>
<td colspan="3"><textarea name="productinfo" readonly="true">Bill</textarea></td>
</tr>

<tr>
<td colspan="3"><input type="hidden" name="service_provider" value="" /></td>
</tr>

<td colspan="4"><input type="submit" value="Submit"/>&emsp;&emsp;
<a title="Print Screen" alt="Print Screen" onclick="window.print();" target="blank" style="cursor:pointer;"> <input type="button" value="PRINT" /></a></td>
</tr>


</table>
</form>
</body>
</html>