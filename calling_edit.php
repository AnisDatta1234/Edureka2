<?php
include('connection.php');
$id=$_REQUEST['id'];
$sql="SELECT * FROM `calling2` WHERE auto_id='$id'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
// $select = "SELECT * FROM `user`";
// $assign = mysqli_query($conn,$select);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../Calling/calling_form.css">
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
    <div class="title">Calling Update Form</div>
    <div class="content">
      <form action="edit_action.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Next_step</span>
            <input type="text" name="next_step" value="<?php echo $row['next_step']?>" required>
          </div>
          <input type="hidden" name="uid" value="<?php echo $row['auto_id']?>">
          <div class="input-box">
            <span class="details">Schedule On</span>
            <input type="date"  name="schedule" value="<?php echo $row['schedule'];?>" required>
          </div>
          <div class="input-box">
            <span class="details">Remarks</span>
            <input type="text"  name="remark" value="<?php echo $row['remark'];?>" required>
          </div>
          <div class="input-box">
            <span class="details">Number</span>
            <input type="number"  name="number" value="<?php echo $row['number'];?>" readonly>
          </div>
          <div class="input-box">
            <span class="details">Time From</span>
            <input type="time"  name="time_from" value="<?php echo $row['time_from'];?>" required>
          </div>
          <div class="input-box">
            <span class="details">Time To</span>
            <input type="time"  name="time_to" value="<?php echo $row['time_to'];?>" required>
          </div>
          <div class="input-box">
            <span class="details">Assigned To</span>
            <input type="text"  name="assigned" value="<?php echo $row['assigned_to'] ?>" required>
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
