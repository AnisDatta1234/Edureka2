<?php
session_start();
include('connection.php');
session_destroy();
echo "<script> alert('Your Logged Out') </script>";
	echo "<script> window.location.href='../Login%20Page/login.php' </script>";


?>