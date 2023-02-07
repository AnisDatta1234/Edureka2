<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" type="text/css" href="registration.css">
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
    <div class="title">Registration Form</div>
    <div class="content">
      <form action="register2_action.php" method="post">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" name="name" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email"  name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
          </div>
          <div class="input-box">
            <span class="details">Phone No.</span>
            <input type="number"  name="phone" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password"  name="password" required>
          </div>
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
