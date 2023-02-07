
 <?php
include('connection.php');
    $sql = "SELECT * FROM `communication2`";
    $all_categories = mysqli_query($conn,$sql);
    
?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="../Customer/customer_form.css">
<style type="text/css">
  #select
  {
    width: 30%;
    border: 2;
  }
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins',sans-serif;
}
body{
  height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 10px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.container{
  max-width: 700px;
  width: 100%;
  background-color: #fff;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 5px 10px rgba(0,0,0,0.15);
}
.container .title{
  font-size: 25px;
  font-weight: 500;
  position: relative;
}
.container .title::before{
  content: "";
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 30px;
  border-radius: 5px;
  background: linear-gradient(135deg, #71b7e6, #9b59b6);
}
.content form .user-details{
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  margin: 20px 0 12px 0;
}
form .user-details .input-box{
  margin-bottom: 15px;
  width: calc(100% / 2 - 20px);
}
form .input-box span.details{
  display: block;
  font-weight: 500;
  margin-bottom: 5px;
}
.user-details .input-box input{
  height: 45px;
  width: 100%;
  outline: none;
  font-size: 16px;
  border-radius: 5px;
  padding-left: 15px;
  border: 1px solid #ccc;
  border-bottom-width: 2px;
  transition: all 0.3s ease;
}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
  border-color: #9b59b6;
}
 form .gender-details .gender-title{
  font-size: 20px;
  font-weight: 500;
 }
 form .category{
   display: flex;
   width: 80%;
   margin: 14px 0 ;
   justify-content: space-between;
 }
 form .category label{
   display: flex;
   align-items: center;
   cursor: pointer;
 }
 form .category label .dot{
  height: 18px;
  width: 18px;
  border-radius: 50%;
  margin-right: 10px;
  background: #d9d9d9;
  border: 5px solid transparent;
  transition: all 0.3s ease;
}
 #dot-1:checked ~ .category label .one,
 #dot-2:checked ~ .category label .two,
 #dot-3:checked ~ .category label .three{
   background: #9b59b6;
   border-color: #d9d9d9;
 }
 form input[type="radio"]{
   display: none;
 }
 form .button{
   height: 45px;
   margin: 35px 0
 }
 form .button input{
   height: 100%;
   width: 100%;
   border-radius: 5px;
   border: none;
   color: #fff;
   font-size: 18px;
   font-weight: 500;
   letter-spacing: 1px;
   cursor: pointer;
   transition: all 0.3s ease;
   background: linear-gradient(135deg, #71b7e6, #9b59b6);
 }
 form .button input:hover{
  /* transform: scale(0.99); */
  background: linear-gradient(-135deg, #71b7e6, #9b59b6);
  }
 @media(max-width: 584px){
 .container{
  max-width: 100%;
}
form .user-details .input-box{
    margin-bottom: 15px;
    width: 100%;
  }
  form .category{
    width: 100%;
  }
  .content form .user-details{
    max-height: 300px;
    overflow-y: scroll;
  }
  .user-details::-webkit-scrollbar{
    width: 5px;
  }
  }
  @media(max-width: 459px){
  .container .content .category{
    flex-direction: column;
  }
}
input[type="checkbox"]
{
   margin: 10px;
   margin-left: 10px;
}

</style>
   </head>
<body>
  <div class="container" style="max-height: 140%;">
    <div class="title">Customer Form</div>
    <div class="content">
      <form action="customer_action.php" method="post">
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
            <span class="details">Customer Name</span>
            <input type="text" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Phone</span>
            <input type="number"  name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Address</span>
            <input type="text"  name="address" required>
          </div>
          <div class="input-box">
            <span class="details">Pincode</span>
            <input type="number"  name="pincode" required>
          </div>
          <div class="input-box">
            <span class="details">Remarks</span>
            <input type="text"  name="remarks" required>
          </div>
          <div class="input-box">
            <span class="details" style="margin-left: 99%;" >Refference</span>
            <input type="text"  name="refference"style="margin-left: 65%;" required>
          </div>
         
     <div class="custom-control custom-checkbox">    
        <label style="margin-left: 289px;">Product Interst</label><br>  
           <input type="checkbox" name="product[]" value="Pump Controller" class="custom-control-input" style="margin-left: 135px;">Pump Controller
          <input type="checkbox" name="product[]" value="Tank cleaning" class="custom-control-input" style="margin-left: 11px;">Tank cleaning
          <input type="checkbox" name="product[]" value="Plumbing support" class="custom-control-input" style="margin-left: 11px;">Plumbing Support
          <input type="checkbox" name="product[]" value="Maintenance" class="custom-control-input" style="margin-left: 127px;">Maintenance
          <input type="checkbox" name="product[]" value="Emergency Support" style="margin-left: 30px;">Emergency Support
          <input type="checkbox" name="product[]" value="Filter">Filter
          <input type="checkbox" name="product[]" value="Other">Other
         
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
