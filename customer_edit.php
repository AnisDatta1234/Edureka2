<?php
include('connection.php');
$id=$_GET['id'];
$sql="SELECT * FROM `customer2` WHERE auto_id3='$id'";
$query=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($query);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../Customer/customer_form.css">
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
    <div class="title">Customer Update Form</div>
    <div class="content">
      <form action="edit_action.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Customer Name</span>
            <input type="text" name="name"value="<?php echo $row['cust_name']?>" required>
          </div>
          <input type="hidden" name="uid" value="<?php echo $row['auto_id3']?>">
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="number"  name="phone" value="<?php echo $row['phone']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text"  name="address" value="<?php echo $row['address']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Pincode</span>
            <input type="number"  name="pincode" value="<?php echo $row['pincode']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Remarks</span>
            <input type="text"  name="remarks" value="<?php echo $row['remarks']?>" required>
          </div>
          <div class="input-box">
            <span class="details">Refference</span>
            <input type="text"  name="refference" value="<?php echo $row['refference']?>" required>
          </div>
          <div class="custom-control custom-checkbox"> 
          <?php
        $product = explode(",", $row['interested'])
        ?>    
        <label style="margin-left: 289px;">Product Interest</label><br> 
        
           <input type="checkbox" name="product[]" value="Pump Controller"<?php if(in_array("Pump Controller", $product)){echo "checked";}?>  style="margin-left: 135px;">Pump Controller
          <input type="checkbox" name="product[]" value="Tank cleaning"<?php if(in_array("Tank cleaning", $product)){echo "checked";}?> class="custom-control-input" style="margin-left: 11px;">Tank cleaning
          <input type="checkbox" name="product[]" value="Plumbing support"<?php if(in_array("Plumbing support", $product)){echo "checked";}?> class="custom-control-input" style="margin-left: 11px;">Plumbing support
          <input type="checkbox" name="product[]" value="Maintenance"<?php if(in_array("Maintenance", $product)){echo "checked";}?> class="custom-control-input" style="margin-left: 127px;">Maintenance
          <input type="checkbox" name="product[]" value="Emergency Support"<?php if(in_array("Emergency Support", $product)){echo "checked";}?> style="margin-left: 30px;">Emergency Support
          <input type="checkbox" name="product[]" value="Filter"<?php if(in_array("Filter", $product)){echo "checked";}?>>Filter
          <input type="checkbox" name="product[]" value="Other"<?php if(in_array("Other", $product)){echo "checked";}?>>Other
         
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
 