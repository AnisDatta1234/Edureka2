<?php
include('connection.php');
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$phone=$_REQUEST['phone'];
$pass=md5($_REQUEST['password']);

 $emailquery = mysqli_query($conn,"select * from user2 where email='$email'");
 $emailcount = mysqli_num_rows($emailquery);
if ($emailcount>0) 
{
   echo "<script> alert('Email Id Already Exist') </script>";
   echo "<script> window.location.href='http://localhost/php/Office_Project/Login%20Page/login.php' </script>";
 }else 
 {
     $sql="INSERT INTO `user2`(`name`, `phone`, `email`, `password`) VALUES ('$name','$phone','$email','$pass')";
     $query=mysqli_query($conn,$sql);
     if ($query) 
     {
     	echo "<script> alert('Succes! You Can Login Now') </script>";
	    echo "<script> window.location.href='../Login%20Page/login.php'</script>";
     }
     else
     {
     	echo "<script> window.location.href='../Login%20Page/login.php' </script>";
     }
      
   }
?>