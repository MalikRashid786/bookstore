<?php
// Merchant key here as provided by Payu
$MERCHANT_KEY = "gtKFFx";
$SALT = "eCwWELxi";
$txnid=rand(1000000000,9999999999);
$name=$_POST['firstname'];
$email=$_POST['email'];
$amount=$_POST['amount'];
$phone=$_POST['phone'];
$surl="http://localhost:70/sucess";
$furl="http://localhost:70/failure";
$productInfo=$_POST['productinfo'];

// Merchant Salt as provided by Payu

$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";
$hashString=$MERCHANT_KEY."|".$txnid."|".$amount."|".$productInfo."|".$name."|".$email."|||||||||||".$SALT;
   
$hash = strtolower(hash('sha512', $hashString));
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
<body align="center" bgcolor="lightgrey">
<h1>PayUMoney Payment Request Form </h1>
<form action="https://sandboxsecure.payu.in/_payment"  name="payuform" method="POST">
<input type="hidden" name="key" value="<?php echo $MERCHANT_KEY;?>" />
<input type="hidden" name="hash"  value="<?php echo $hash;?>" />
<input type="hidden" name="txnid" value="<?php echo $txnid;?>"/>
<table border="1px solid"align="center">
<tr>
<td>Amount: </td>
<td><input name="amount" value="<?php echo $amount;?>" /></td>
<td>First Name: </td>
<td><input name="firstname" id="firstname" value="<?php echo $name;?>" /></td>
</tr>
<tr>
<td>Email: </td>
<td><input name="email" id="email"  value="<?php echo $email;?>" /></td>
<td>Phone: </td>
<td><input name="phone" value="<?php echo $phone;?> " /></td>
</tr>
<tr>
<td>Product Info: </td>
<td colspan="3"><textarea name="productinfo" ><?php echo $productInfo;?></textarea></td>
</tr>
<tr>
<td>Success URI: </td>
<td colspan="3"><input name="surl"  size="64" value="<?php echo $surl;?> " /></td>
</tr>
<tr>
<td>Failure URI: </td>
<td colspan="3"><input name="furl"  size="64" value="<?php echo $furl;?> " /></td>
</tr>
<tr>
<td colspan="3"><input type="hidden" name="service_provider" value="" /></td>
</tr>
<tr>

<td colspan="4"><input type="submit" value="Submit"  />
<a title="Print Screen" alt="Print Screen" onclick="window.print();" target="blank" style="cursor:pointer;"> <input type="button" value="PRINT" /></a></td>
</tr>
</table>
</form>

</body>
</html>