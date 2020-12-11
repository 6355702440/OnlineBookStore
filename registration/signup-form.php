<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup Form</title>
    <link rel="icon" href="../images/icons/logos.png" type="image/png"/> 

    <link rel="stylesheet" href="../styling/form1.css">
    <link rel="stylesheet" href="../styling/media-queries/form.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">

    <!-- CSS LINKS  -->
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
            <form id="signupform" method="POST">
                <div class="signup-text">
                    <h1>Sign Up</h1>
                </div>
                <div class="form-btn-signin">
                    <p>Already have an Account ?</p>
                    <input  type="button" name="Signin" class="btn" value="Sign in"onclick="window.location.href='signin-form.php'">
                </div>


                <!--Sign up message from PHP file-->
                <div id="signupmessage"></div>


                <div class="form-group">
                    <input type="text" id="fullName" placeholder="Your Name" name="username">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="Your Email" name="email">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Your Password" name="password">
                </div>
                <div class="form-btn">
                    <input type="submit" name="submit" class="btn" value="Create Free Account">
                </div>
            </form>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/index10.js"></script>
</body>
</html>
