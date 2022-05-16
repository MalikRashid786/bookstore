<?php
$qid=$_POST['qid'];
//echo $qid;
$ans=$_POST['ans'];
//echo $ans;
include("config.php");
$query="insert into tbl_ans(answer,qid,date) values ('$ans','$qid',curdate())";
mysqli_query($conn,$query);
header("location:discuss.php");
?>