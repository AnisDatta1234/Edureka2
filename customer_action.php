<?php
session_start();
include('connection.php');
$com_id=$_REQUEST['com_id'];
$customer=$_REQUEST['name'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$pin=$_REQUEST['pincode'];
$product=implode(',', $_REQUEST["product"]);
$remarks=$_REQUEST['remarks'];
$ref=$_REQUEST['refference'];
$rand=rand(1,1000);
$sql="CALL customer2('','$com_id','$customer','$phone','$address','$pin','$product','$remarks','$ref','none','none','$rand',1)";
$query=mysqli_query($conn,$sql);
if ($query) 
{   
	
	echo "<script> alert('Data Inserted') </script>";
	echo "<script> window.location.href='customer.php' </script>";
}
else
{
	echo "<script> alert('Not Inserted') </script>";
}

?>