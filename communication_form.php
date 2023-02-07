<?php
include('connection.php');
    $stat = "SELECT * FROM `service_center`";
    $status = mysqli_query($conn,$stat);
    
?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
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
    <div class="title">Communication Form</div>
    <div class="content">
      <form action="communication_action.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Name</span>
            <input type="text" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Point</span>
            <input type="text"  name="point" required>
          </div>
          <div class="input-box">
            <span class="details">Date</span>
            <input type="date"  name="date" required>
          </div>
          <div class="input-box">
            <span class="details">SPOC</span>
            <input type="text"  name="spoc" required>
          </div>
          <div class="input-box">
            <span class="details">Time</span>
            <input type="time"  name="time" required>
          </div>
          <div class="input-box">
            <span class="details">Service Center</span>
             <select name="center" style="width: 100%;
    height: 43px;">
            <?php while ($query = mysqli_fetch_array(
                        $status,MYSQLI_ASSOC)):;?>
                <option value="<?php echo $query["center"];?>">
                    <?php echo $query["center"];?>
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
