<?php
session_start();
include('connection.php');
$email=$_REQUEST["email"];
$pass=md5($_REQUEST["password"]);
$sql="SELECT * FROM `job_user` WHERE email='$email' AND password='$pass'";
$query=mysqli_query($conn,$sql);
$total=mysqli_num_rows($query);
$row=mysqli_fetch_assoc($query);
if ($total) 
{
	$_SESSION['id']=$row['id'];
	$_SESSION['name']=$row['name'];
	echo "<script> alert('Login Succesfull') </script>";
		echo "<script> window.location.href='../Job/job.php' </script>";
}
else{
	echo "<script> alert('Login Failure') </script>";
	echo "<script> window.location.href='../Job/login3.php' </script>";
}
?>