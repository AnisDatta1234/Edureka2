<?php
include('connection.php');
$auto_id=$_GET['auto_id'];
date_default_timezone_set('Asia/Kolkata');
$start_time=date('h:i:s');

$query1="UPDATE `calling2` SET `time_from`='$start_time',`next_step`='started' WHERE auto_id='$auto_id'";
$sql1=mysqli_query($conn,$query1);
if($query1)
{
	$query1="UPDATE `calling2_log` SET `time_from`='$start_time',`next_step`='started' WHERE auto_id='$auto_id'";
$sql1=mysqli_query($conn,$query1);
	echo "<script>alert('Service Started');</script>";
	echo "<script>window.location.href='service.php';</script>";
}
else 
{
	 echo "<script>alert('OOPS Function Not Working');</script>";
	 echo "<script>window.location.href='service.php';</script>";
}

?>