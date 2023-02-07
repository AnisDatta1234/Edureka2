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
$sql="SELECT * FROM `communication2` ORDER BY id DESC";
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
  <a href="../Customer/customer.php"><input type="button" style="background-color: green;" name="" value="Customer" class="button" style="cursor: pointer"></a> </a>
  
</nav>
      <div class="content-wrapper"> 
        <h2 style="margin-left: 40%;">Origin</h2> 
    <div class="table-responsive" style="width: 98%;
    margin-left: 1%;">
    <a href="communication_form.php"><input type="button" name="" value="New" class="button" style="cursor: pointer"></a>
    <a href="../Logout/logout.php"><input type="button" name="" value="Logout" class="button2" style="cursor: pointer"></a><br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <th style="text-align:center;">Name</th>
        <th style="text-align:center;">Point</th>
        <th style="text-align:center;">Date</th>
        <th style="text-align:center;">SPOC</th>
        <th style="text-align:center;">Time</th>
        <th style="text-align:center;">Service Center</th>
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
               <td><?php echo $row['service_center']?> </td>
                <td><a href="edit.php?id=<?php echo $row['id']?>"><input type="button" name="" value="Edit" class="edit" style="cursor: pointer"></a>
               
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