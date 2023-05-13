<?php include 'header.php'; ?>
<html>

<head>
    <title>Login PopUp</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body class="body">
    <div class="wrapper">
        <div class="container_signup">
            <br><br>
            <div class="signup123">
                <hr>Blood Availability
                <hr>
            </div>


            <form action="signup.php" method="post">
                <div class="signup-form123">
                    <input type="text" placeholder="Enter your Address" name="address" class="input_signup" required><br />
                    <input type="number" placeholder="Enter your Area Pincode" name="Pin_code" class="input_signup" required><br />
                    <input type="city" placeholder="Enter your City " name="city" class="input_signup" required><br />
                    <input type="text" placeholder="Enter your Blood group " name="Blood Group" class="input_signup" required><br />
                    <p class="ptext">
                        Write more about your Inquiry
                    </p>
                    <textarea id="w3review" name="w3review" rows="4" cols="44">

</textarea>
                    <input type="submit" class="btn_signup" name="submit" value="Inquiry" /><br>

                </div>
            </form>



        </div>
    </div>

</body>

</html>