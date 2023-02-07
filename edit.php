<?php
include('connection.php');
$id=$_GET['id'];
$sql="CALL communication2($id,'','','','','','','','',4)";

$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../Communication/communication_form.css">
<style type="text/css">
  #select
  {
    width: 30%;
    border: 2;
  }

</style>
   </head>
<body>
  <div class="container" style="max-height: 140%;">
    <div class="title">Communication Update Form</div>
    <div class="content">
      <form action="edit_action.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" value="<?php echo $row['name']?>" required>
            <input type="hidden" name="uid" value="<?php echo $row['id']?>">
          </div>
          <div class="input-box">
            <span class="details">Point</span>
            <input type="text"  name="point" value="<?php echo $row['point']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date"  name="date"value="<?php echo $row['date']?>" required>
          </div>
          <div class="input-box">
            <span class="details">SPOC</span>
            <input type="text"  name="spoc"value="<?php echo $row['spoc']?>" required>
          </div>
          <div class="input-box">
            <span class="details" style="margin-left: 95%;">Time</span>
            <input type="time"  name="time" value="<?php echo $row['time']?>" required style="margin-left: 55%;">
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Update">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
 