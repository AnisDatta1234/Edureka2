<?php
include('connection.php');
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$pass=md5($_REQUEST['password']);

 $emailquery = mysqli_query($conn,"select * from job_user where email='$email'");
 $emailcount = mysqli_num_rows($emailquery);
if ($emailcount>0) 
{
   echo "<script> alert('Email Id Already Exist') </script>";
   echo "<script> window.location.href='../Service/login2.php' </script>";
 }else 
 {
     $sql="INSERT INTO `job_user`(`name`, `phone`, `email`, `password`) VALUES ('$name','$phone','$email','$pass')";
     $query=mysqli_query($conn,$sql);
     if ($query) 
     {
     	echo "<script> alert('Succes! You Can Login Now') </script>";
	    echo "<script> window.location.href='../Job/login3.php'</script>";
     }
     else
     {
     	echo "<script> window.location.href='../Job/login3.php' </script>";
     }
      
   }
?>