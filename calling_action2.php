<?php
include('connection.php');
$com_id=$_REQUEST['com_id'];
$cust_id=$_REQUEST['cust_id'];
$step=$_REQUEST['next_step'];
$schedule=$_REQUEST['schedule'];
$remark=$_REQUEST['remark'];
$num=$_REQUEST['number'];
$assign_to=$_REQUEST['assigned'];
$rand=rand(1,1000);
$sql="CALL calling('','$com_id','$cust_id','$step','$schedule','$remark','$num','$assign_to','none','none','$rand',1)";
// $query=mysqli_query($conn,$sql);
// if ($query) 
// {
// 	 $sql1="INSERT INTO `calling_log`(`channel_id`, `customer_id`, `next_step`, `schedule`, `remark`, `number`, `assigned_to`, `modify_by`, `modify_time`, `auto_id`) VALUES ('$com_id','$cust_id','$step','$schedule','$remark','$num','$assign_to','none','none','$rand')";
// 	$query1=mysqli_query($conn,$sql1);
// 	 echo "<script> alert('Data Inserted') </script>";
// 	 echo "<script> window.location.href='http://localhost/php/Office_Project/Calling/calling.php' </script>";
// }
// else
// {
// 	echo "<script> alert('Not Inserted') </script>";
// }

?>