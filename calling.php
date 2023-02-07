<?php
session_start();
include('connection.php');
$name=$_SESSION['name'];
if ($name=="") 
{
    echo "<script> alert('Please Login First') </script>";
    echo "<script> window.location.href='../Login%20Page/login.php' </script>";
}
else
{
include('connection.php');
$sql="SELECT communication2.name,communication2.point,communication2.date,communication2.spoc,communication2.time,customer2.cust_name,customer2.phone,customer2.address,customer2.pincode, customer2.interested,customer2.remarks,customer2.refference,calling2.id,calling2.auto_id,calling2.next_step,calling2.schedule,calling2.remark,calling2.number,calling2.time_from,calling2.time_to,calling2.assigned_to FROM `communication2` INNER JOIN `customer2` ON communication2.id=customer2.channel_id INNER JOIN `calling2` ON customer2.id=calling2.customer_id WHERE assigned_to='$name' ORDER BY id DESC";
$query=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="customer_table.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


 <style type="text/css">
  body {
  background-color: #c3d6de;
}

table {
  background-color:white;
} 
   a{
    color: white;
   }
   .arrow{
    text-align: center;
   }
      th
      {
        text-align: center;
         background-color: #89ABE3FF;
      }
      .button 
      {
        float: left;
        margin-left: 15;
        width: 100px;
        margin-bottom: 5;
        border-radius: 8px;
        background-color: #008CBA;
        color: white;
       }
       
      .button2 
      {
        float: right;
        margin-right: 15;
        width: 100px;
        margin-bottom: 5;
        margin-bottom: 1%;
        border-radius: 8px;
        background-color: #008CBA;
        color: white;
       }
       td
       {
        text-align: center;
         background-color: #FCF6F5FF;
         color: #990011FF;
       }
       .edit
       {
         width: 58px;
        margin-bottom: 5;
        border-radius: 8px;
       background-color: #555555;
        color: white;
       }
       .delete
       {
         width: 60px;
        margin-bottom: 5;
        border-radius: 8px;
        background-color:  #b20238;
        color: white;
       }
  </style>
</head>
 <nav class="navbar navbar-light bg-light justify-content-between bg-dark" style="margin-bottom: 0%">
  <a class="navbar-brand" style="color:white;" style="text-align: center;" ><i class='fas fa-user-circle' style='font-size:24px'><?php echo $_SESSION['name'] ?></i></a>
  <a href="../Communication/communication.php"><input type="button" style="background-color: green;" name="" value="Origin" class="button" style="cursor: pointer"></a> </a>
</nav>
      <div class="content-wrapper"> 
        <h2 style="margin-left: 40%;">Calling Sheet</h2> 
    <div class="table-responsive" style="width: 98%;
    margin-left: 1%;">
    <a href="calling_form.php"><input type="button" name="" value="New" class="button" style="cursor: pointer"></a>
    <a href="../Logout/logout.php"><input type="button" name="" value="Logout" class="button2" style="cursor: pointer"></a><br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <th style="text-align:center;">Name</th>
        <th style="text-align:center;">Point</th>
        <th style="text-align:center;">Date</th>
        <th style="text-align:center;">SPOC</th>
        <th style="text-align:center;">Time</th>
        <th style="text-align:center;width: 110px;">Customer Name</th>
        <th style="text-align:center;">Phone</th>
        <th style="text-align:center;">Address</th>
        <th style="text-align:center;    width: 80.8375px">Pin</th>
        <th style="text-align:center;width: 17.825px;">Product Interest</th>
        <th style="text-align:center;">Remark</th>
        <th style="text-align:center;">Refference</th>
        <th style="text-align:center;">Next Step</th>
        <th style="text-align:center;">Schedule</th>
        <th style="text-align:center;">Remark</th>
        <th style="text-align:center;">Number</th>
        <th style="text-align:center;">Assigned To</th>
        <th style="text-align:center;">Time From</th>
        <th style="text-align:center;">Time To</th>
        <th style="text-align:center;">Action</th>
        
    </tr>
        </thead>
        <tbody>
            <?php
          while ($row=mysqli_fetch_assoc($query)) {?>
             <tr>
               <td><?php echo $row['name']?> </td>
               <td><?php echo $row['point']?> </td>
               <td><?php echo $row['date']?> </td>
               <td><?php echo $row['spoc']?> </td>
               <td><?php echo $row['time']?> </td>
               <td><?php echo $row['cust_name']?> </td>
               <td><?php echo $row['phone']?> </td>
               <td><?php echo $row['address']?> </td>
               <td><?php echo $row['pincode']?> </td>
               <td><?php echo $row['interested']?> </td>
               <td><?php echo $row['remarks']?> </td>
               <td><?php echo $row['refference']?> </td>
               <td><?php echo $row['next_step']?> </td>
               <td><?php echo $row['schedule']?> </td>
               <td><?php echo $row['remark']?> </td>
               <td><?php echo $row['number']?> </td>
               <td><?php echo $row['assigned_to']?> </td>
               <td><?php echo $row['time_from']?> </td>
               <td><?php echo $row['time_to']?> </td>
               <td><a href="calling_edit.php?id=<?php echo $row['auto_id']?>"><input type="button" name="" value="Edit" class="edit" style="cursor: pointer"></a><br><br>
                </td>
             </tr>
           <?php
          }
        ?>
            <br>
  </tbody>     
</div>
    </center> <div class="line"></div> </div> </div> </div>
    <script type="text/javascript">
  $(document).ready(function () {
    $('#example').DataTable();
});
</script>
</html>
<?php } ?>