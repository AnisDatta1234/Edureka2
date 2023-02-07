<?php
session_start();
include('connection.php');
    $sql = "SELECT * FROM `communication2`";
    $all_categories = mysqli_query($conn,$sql);
    $sql1 = "SELECT * FROM `customer2`";
    $all_categories1 = mysqli_query($conn,$sql1);
    $select = "SELECT * FROM `user2`";
    $assign = mysqli_query($conn,$select);
    $stat = "SELECT * FROM `calling_status`";
    $status = mysqli_query($conn,$stat);
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
    <div class="title">Calling Form</div>
    <div class="content">
      <form action="calling_action.php" method="post">
        <div class="user-details">
           <div class="input-box">
            <span class="details">Communication</span>
             <select name="com_id" style="width: 100%;
             height: 43px;">
             <?php while ($category = mysqli_fetch_array(
                        $all_categories,MYSQLI_ASSOC)):;?>
                <option value="<?php echo $category["id"];?>">
                    <?php echo $category["name"];?>
                </option>
            <?php endwhile;?>
          </select>
          </div>
          <br>
           <div class="input-box">
            <span class="details">Customer</span>
            <select name="cust_id" style="width: 100%;
    height: 43px;">
            <?php while ($category1 = mysqli_fetch_array(
                        $all_categories1,MYSQLI_ASSOC)):;?>
                <option value="<?php echo $category1["id"];?>">
                    <?php echo $category1["cust_name"];?>
                </option>
            <?php endwhile;?>
          </select>
          </div>
          <div class="input-box">
            <span class="details">Next_Step</span>
             <select name="next_step" style="width: 100%;
    height: 43px;">
            <?php while ($query = mysqli_fetch_array(
                        $status,MYSQLI_ASSOC)):;?>
                <option value="<?php echo $query["status"];?>">
                    <?php echo $query["status"];?>
                </option>
            <?php endwhile;?>
          </select>
          </div>
          <br>
          <div class="input-box">
            <span class="details">Schedule On</span>
            <input type="date"  name="schedule" required>
          </div>
          <div class="input-box">
            <span class="details">Remarks</span>
            <input type="text"  name="remark" required>
          </div>
          <div class="input-box">
            <span class="details">Number</span>
            <input type="number"  name="number" required>
          </div>
          <div class="input-box">
            <span class="details">Time From</span>
            <input type="time"  name="time_from">
          </div>
          <div class="input-box">
            <span class="details">Time To</span>
            <input type="time"  name="time_to">
          </div>
          <div class="input-box">
            <span class="details" style="margin-left: 85%;">Assigned_To</span>
             <select name="assigned" style="width: 100%;
    height: 43px;    margin-left: 55%;">
            <?php while ($assigned = mysqli_fetch_array(
                        $assign,MYSQLI_ASSOC)):;?>
                <option value="<?php echo $assigned ["name"];?>">
                    <?php echo $assigned ["name"];?>
                </option>
            <?php endwhile;?>
          </select>
          </div>
          <br>
        </div>
        <div class="button">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </div>
</body>
</html>
