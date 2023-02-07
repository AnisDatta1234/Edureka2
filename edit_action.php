<?php
session_start();
include('connection.php');
$id=$_REQUEST['uid'];
$customer=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$pin=$_REQUEST['pincode'];
$product=implode(',', $_REQUEST["product"]);
$remarks=$_REQUEST['remarks'];
$ref=$_REQUEST['refference'];
$modify_by=$_SESSION['name'];
date_default_timezone_set('Asia/Kolkata');
$date = date('d-m-2023 h:i:s');
$sql="CALL customer2('','','$customer','$phone','$address','$pin','$product','$remarks','$ref','$modify_by','$date','$id',2)";
$query=mysqli_query($conn,$sql);
if ($query) 
{
	echo "<script> alert('Data Updated') </script>";
	echo "<script> window.location.href='customer.php' </script>";
}
else
{
	echo "<script> alert('Not Updated') </script>";
}

?>