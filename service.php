<?php 
session_start();
include('connection.php');
$name=$_SESSION['name'];
if ($name=="") 
{
    echo "<script> alert('Please Login First') </script>";
    echo "<script> window.location.href='../Service/login2.php' </script>";
}
else
{
include('connection.php');
 $query="SELECT customer2.cust_name,customer2.phone,customer2.address,customer2.interested, customer2.pincode,customer2.remarks,calling2.time_from,calling2.time_to,calling2.assigned_to FROM customer2 INNER JOIN calling2 ON customer2.id=calling2.customer_id WHERE assigned_to='$name' ORDER BY calling2.id DESC";
 $sql=mysqli_query($conn,$query);

?>
<!DOCTYPE html>
<html>
<head>
      <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  < SweetAlert2 -->
  
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>



    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title></title>

<style type="text/css">
            @import url("https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700");

* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

html,


/*.container {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.radio_container {
    display: flex;
    justify-content: space-around;
    align-items: center;
    background-color: #cecece;
    width: 380px;
    height: 50px;
    border-radius: 9999px;
    box-shadow: inset 0.5px 0.5px 2px 0 rgba(0, 0, 0, 0.15);
    margin-top: -201px;
}

input[type="radio"] {
    appearance: none;
    display: none;
}

label {
    font-family: "Open Sans", sans-serif;
    font-size: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: inherit;
    width: 80px;
    height: 40px;
    text-align: center;
    border-radius: 9999px;
    overflow: hidden;
    transition: linear 0.3s;
    color: #6e6e6edd;
}

input[type="radio"]:checked + label {
    background-color: #1e90ff;
    color: #f1f3f5;
    font-weight: 900;
    transition: 0.3s;
}
*/ 

            table td
            {
                 font-size: 18px;
                 font-weight: bold;
                 font-style: italic;

            }
            table th 
            {

                 font-size: 18px;
                 font-weight: bold;
                 font-style: italic;
            }
            body 
            {
                 background-color: lightblue;
            }
            button 
            {
                margin:5px;
                width: 11%;
            }

</style>    
</head>
<body>
   <div>
        <nav class="navbar navbar-light bg-light justify-content-between bg-dark" style="margin-bottom: 0%">
  <a class="navbar-brand" style="color:white;" style="text-align: center;" ><i class='fas fa-user-circle' style='font-size:24px'><?php echo $_SESSION['name'] ?></i></a>
  <a href="../Service/logout2.php"><input type="button" style="background-color: green;" name="" value="Logout" class="btn btn-success" style="cursor: pointer"></a>
   </div>
<?php 
while($row=mysqli_fetch_assoc($sql))
{
    ?>

<center>
<table class="table table-structured table-bordered table-responsive " style="width:737px;margin-top: 41px;">

 
     <tr class="table-success"><th>Customer Name:</th><td><?php echo $row['cust_name'];?></td></tr>
     <tr class="table-primary"><th>Phone:</th><td><?php echo $row['phone'];?></td></tr>
     <tr class="table-success"><th>Pincode:</th><td><?php echo $row['pincode'];?></td></tr>
     <tr class="table-info"><th>Address:</th><td><?php echo $row['address'];?></td></tr>
     <tr class="table-light"><th>Product:</th><td><?php echo $row['interested'];?></td></tr>
     <!-- <tr class="table-primary"><th>Remarks:</th><td></td></tr> -->
     <tr class="table-danger"><th>Time From:</th><td><?php echo $row['time_from'];?></td></tr>
     <tr class="table-primary"><th>Time To:</th><td><?php echo $row['time_to'];?></td></tr>

     
</table>

       <!-- <a href="start_time_update.php?id=<?php echo $row['auto_id2'];?>"><button class="btn btn-success" ><i class="fa fa-home" aria-hidden="true" style="font-size:red;padding: 8px;"></i>Start</button></a>
      
      <a href="insert.php?id=<?php echo $row['auto_id2'];?>"><button class="btn btn-warning" id="success" name="sub"><i class="fas fa-info-circle" aria-hidden="true" style="font-size:red;padding: 8px";></i> </i>Hold</button></a>

      <a href="end_time_update.php?id=<?php echo $row['auto_id2'];?>"><button class="btn btn-primary"> <i class="fa fa-trash" aria-hidden="true" style="font-size:red;padding: 8px;"></i>End</button></a> -->
     ;
      <!-- <a href=""><button class="btn btn-danger"> <i class="fa fa-times-circle" aria-hidden="true" style="font-size:red;padding: 8px";></i>Close</button></a> -->
</center>
  
<?php   
}

?>

<!-- <div class="container">
    <div class="radio_container">
        <input type="radio" name="radio" id="one" name="">
        <label for="one">one</label>
        <input type="radio" name="radio" id="two" name="">
        <label for="two">two</label>
        <input type="radio" name="radio" id="three" name="">
        <label for="three">three</label>
    </div>
</div> -->
<script type="text/javascript">
           


</script>
</body> 
</html>
<?php
}
?>