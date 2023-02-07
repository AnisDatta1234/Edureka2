
<?php
include('connection.php');
$auto_id=$_GET['auto_id'];
 $query="SELECT customer2.cust_name,customer2.phone,customer2.address,customer2.interested, customer2.pincode,customer2.remarks,calling2.time_from,calling2.auto_id,calling2.time_to,calling2.assigned_to FROM customer2 INNER JOIN calling2 ON customer2.id=calling2.customer_id
WHERE auto_id='$auto_id' ORDER BY calling2.id DESC ";
 $sql=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($sql);

$query_insert="UPDATE `calling2` SET `next_step`='Re-scheduled' WHERE auto_id='$auto_id'";
$sql_insert=mysqli_query($conn,$query_insert);
if($sql_insert)
{
	 $query_insert="UPDATE `calling2_log` SET `next_step`='Re-scheduled' WHERE auto_id='$auto_id'";
     $sql_insert=mysqli_query($conn,$query_insert);
	 echo "<script>alert('Rescheduled');</script>";
	 echo  "<script>window.location.href='job.php';</script>";
}
else 
{
	 echo "<script>alert('Not Interested');</script>"; 
     echo  "<script>window.location.href='job.php';</script>";
}	
?>	