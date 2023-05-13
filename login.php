
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
      <div class="signup123"><hr>Login<hr></div>
      
      
        <form action="signup.php" method="post">
            <div class="signup-form123" >
              <input type="text" placeholder="Enter your Username" name="name" class="input_signup" required><br />
              <input type="password" placeholder="password" name="password" class="input_signup" required><br />
              <input type="submit" class="btn_signup" name="submit" value="Login"/><br>

              <h2><a href="signup.php" class="alreadyid">New Register? Signup Here</a></h2><br>
              <!-- <h2><a href="orglogin.php" class="alreadyid">Organizations: Signup Here</a></h2> -->
            </div>
        </form>
      
      
      
    </div>
  </div>
        
    </body>
</html>
