<?php
session_start();
include('connection.php');
session_destroy();
echo "<script> alert('Your Logged Out') </script>";
	echo "<script> window.location.href='../Job/login3.php' </script>";


?>