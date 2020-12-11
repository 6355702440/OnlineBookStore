<?php
    include('../connection.php');
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="icon" href="../images/icons/logos.png" type="image/png"/> 

    <!-- Google Font Link -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!-- CSS Links -->
    <link rel="stylesheet" href="../styling/forms.css">
    <link rel="stylesheet" href="../styling/media-queries/media-form.css">
    <link rel="stylesheet" href="../styling/common1.css">



    <style>
        input:focus{
            outline: none;
        }
      
        @media(max-width:600px){
            .overlay{
                background-color: black;
                position: absolute;
                width: 40%;
                height: 80vh;
                filter: grayscale(100%);
                background-color: rgb(25, 26, 28, 0.5);
            }
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    <div class="container">
        <div class="side-wrapper">
            <p class="side-text">Join us Today and explore our Library</p>
        </div>

        <div class="signup-wrapper">
            
            <form class="signin-form" action="" method="post" >
                <div class="signup-text">
                    <h1>Login to Your Account</h1>
                </div>
                <div class="form-btn-signin">
                    <p>Don't have Account ?</p>
                    <input type="button" name="Signin" class="btn" value="Sign Up" onclick="window.location.href='signup-form.php'" >
                </div>


                <!--Sign up message from PHP file-->
                <div id="loginmessage"></div>

                
                <div class="form-group">
                    <input type="email" placeholder="Your Email" id="email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Your Password" name="password">
                </div>
                <div class="form-group" id="forgot_pss">
                    <a href="forgotpassword-form.php" class="fg-password" id="forgot-password">Forgot Password ?</a>
                </div>
                <div class="form-btn">
                    <input type="submit" name="login" class="btn" value="Login">
                </div>
                
            </form>
        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/index10.js"></script>
    
</body>
</html>