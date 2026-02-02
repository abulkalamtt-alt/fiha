<?php
include 'ajax_con.php';
date_default_timezone_set("Asia/Dhaka");
$upday=date('d');
$upmonth=date('M');
$upyear=date('Y');

$rank=rand(1000,8000);
$NTime=time();
$historys=mysqli_query($con2,"INSERT INTO `demo`(`user`, `day`, `month`, `year`, `time`) VALUES ('$rank', '$upday', '$upmonth', '$upyear', '$NTime')") or die('Wrong 1');

$refeshs=mysqli_query($con2,"SELECT * FROM `demo` ORDER BY `user` DESC");
while($refesh=mysqli_fetch_array($refeshs))
{
$ownid=$refesh['user'];
echo "Date: ".date("d M Y h:i A",$refesh['time']).", User: $ownid <br>";
}
?>