
<?php include 'header.php'; ?>
<html>
    <head>
        <title>Login PopUp</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body class = "body">
          <div class="wrapper">
    <div class="container_signup">
      <br><br>
      <div class="signup123"><hr>Sign Up<hr></div>
      
      
        <form action="signup.php" method="post">
            <div class="signup-form123" >
              <input type="text" placeholder="Enter your Username" name="name" class="input_signup" required><br />
              <input type="email" placeholder="Email" name="number" class="input_signup" required><br />
              <input type="password" placeholder="password" name="password" class="input_signup" required><br />
                <input type="cpassword" placeholder="Confirm Password" name="bloodgroup" class="input_signup" required><br />
              <input type="number" placeholder="Enter your Mobile Number" name="number" class="input_signup" required><br />
              <input type="city" placeholder="Enter your City " name="city" class="input_signup" required><br />
              <!-- <input type="gender" placeholder="gender " name="city" class="input_signup" required><br /> -->
              <p>What is your Gender ?</p>
              <input type="radio" name="gender" value="male"> Male
              <input type="radio" name="gender" value="female"> Female
              <input type="radio" name="gender" value="female"> Others
              <input type="submit" class="btn_signup" name="submit" value="Register"/><br>

              <h2><a href="login.php" class="alreadyid">Already Have Register? Login Here</a></h2><br>
              <!-- <h2><a href="orglogin.php" class="alreadyid">Organizations: Signup Here</a></h2> -->
            </div>
        </form>
      
      
      
    </div>
  </div>
        
    </body>
</html>
