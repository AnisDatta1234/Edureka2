<?php
include('connection.php');
$name=$_REQUEST['name'];
$point=$_REQUEST['point'];
$date=$_REQUEST['date'];
$spoc=$_REQUEST['spoc'];
$time=$_REQUEST['time'];
$center=$_REQUEST['center'];
$sql="CALL communication2('','$center/$date/$point','$point','$date','$spoc','$time','$center','none','none',1)";
$query=mysqli_query($conn,$sql);
if ($query) 
{
	echo "<script> alert('Data Inserted') </script>";
	echo "<script> window.location.href='communication.php' </script>";
}
else
{
	echo "<script> alert('Data Not Inserted') </script>";
	echo "<script> window.location.href='communication.php' </script>";
}

?>