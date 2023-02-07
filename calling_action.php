<?php
include('connection.php');
    $com_id=$_REQUEST['com_id'];
$cust_id=$_REQUEST['cust_id'];
$step=$_REQUEST['next_step'];
$schedule=$_REQUEST['schedule'];
$remark=$_REQUEST['remark'];
$num=$_REQUEST['number'];
$assign_to=$_REQUEST['assigned'];
$from=$_REQUEST['time_from'];
$time_to=$_REQUEST['time_to'];
$rand=rand(1,1000);
    $assign=$_REQUEST['assigned'];
    $date=$_REQUEST['schedule'];
    $sql="SELECT * FROM `calling2` WHERE assigned_to='$assign' AND schedule='$date'";
    $query=mysqli_query($conn,$sql);
    $total=mysqli_num_rows($query);
    $fetch=mysqli_fetch_assoc($query);
    if ($total) 
    {
     $sql="INSERT INTO `calling2`(`channel_id`, `customer_id`, `next_step`, `schedule`, `remark`, `number`, `assigned_to`, `time_from`, `time_to`, `modify_by`, `modify_time`, `auto_id`) VALUES ('$com_id','$cust_id','$step','$schedule','$remark','$num','$assign_to','$from','$time_to','none','none','$rand')";
     $query=mysqli_query($conn,$sql);
      echo "<script>alert('".'Already This Name Is Assigned '.$total.' Times On This Date'."')</script>";
      if ($query) 
      {
       
       echo "<script> alert('Data Inserted') </script>";
       echo "<script> window.location.href='calling.php' </script>";
      }
  }
  else
  {
    $sql="INSERT INTO `calling2`(`channel_id`, `customer_id`, `next_step`, `schedule`, `remark`, `number`, `assigned_to`, `time_from`, `time_to`, `modify_by`, `modify_time`, `auto_id`) VALUES ('$com_id','$cust_id','$step','$schedule','$remark','$num','$assigned_to','$from','$time_to','none','none','$rand')";
     $query=mysqli_query($conn,$sql);
    
      if ($query) 
      {
       
       echo "<script> alert('Data Inserted') </script>";
       echo "<script> window.location.href='calling.php' </script>";
      }
  }
  
  



?>