<?php



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" href="style1register.css">
</head>
<body>
    <div id="main-wrapper">
            <img src="image/person1.jpg">
            <h1>Login Here</h1>

            <form  class="myform" action="login1.html" method="post">
                <label class="mylabel"><b>Username</b></label><br>
                <input type="text" class="inputvalue" placeholder="Your Name"><br>

                <label class="mylabel"><b>Password</b></label><br>
                <input type="password" class="inputvalue" placeholder="Your Password"><br>

                <label class="mylabel"><b>Confirm Password</b></label><br>
                <input type="password" class="inputvalue" placeholder="Your Password"><br>

                <input type="submit" id="signup-btn" value="Sign Up"><br>
                
                <input type="submit" id="back-btn" value="Back To Login"><br>

            </form>
        </div>
</body>
</html>