<?php
     include("connect.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HouseHawking.com</title>
    <link rel="stylesheet" href="Style.css">
  </head>
  <body style="background-image:url('bgg1.jpg');">
    
    <h1 id="heading">Hi..Welcome,</h1>
    
    <h2 id="headn">HouseHawking.com</h2>

    <div class="center">
     
      <h1>Login</h1>
      <form  action="login.php" method="post">
        <div class="txt_field">
          <input type="text" required name="username">
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" required name="password">
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" name="submit">
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>