<?php
    error_reporting(0);
    include('registration/logout.php');
      
    if(isset($_SESSION) ){
        if($_GET['delete'] == 1){
            session_destroy();
        }
    } 
    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Many E-Books</title>
    <link rel="icon" href="images/icons/logos.png" type="image/png"/> 

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="styling/styling7.css">
    <link rel="stylesheet" href="styling/common1.css">
    <style>
        body{
            overflow: hidden;
        }

        .dashboard a{
            color: white;
        }

        .hero-text{
            color: white;
        }
        .navbar > .logo > img{
            width: 80px;
            height: 80px;
        }

        @media(max-width: 1024px){
            html, body{
                width: 100%;
                margin:0;
                padding: 0;
                font-size: 4vw;
                height: 100%;
                overflow: hidden;
            }
            .container{
                /* width: 100%;; */
                height: 100%;
                background-color: rgb(25, 26, 28, 0.95);
            }

            .overlay{
                /* height: 250vh; */
            }
            .navbar{
                display: flex;
                margin: 2rem;
            }
            .dashboard{
                right: -4.67vh;
            }

            .hero-text{
                top: 10vh;
                width: 95%;
                margin: 0;
                padding: 0;
                padding: 0;
                padding: 0;
                font-size: 1.2rem;
            }

            #text{
                margin: 7vh 0;
                font-size: 1.8rem;
            }
        

            .explore-btn  {
               top: 63%;
               left: 25rem;
               margin: 2rem;
            }
        }
    </style>
    
</head>

<body>

    <!-- Main Page -->
    <div class="container">
        <div class="overlay">
            <div class="navbar" >
                <div class="logo">
                    <img src="images/icons/logos.png">
                </div>
                <div class="dashboard">
                    <a href="registration/signin-form.php" >DASHBOARD</a>
                </div>
            </div>
            <div class="heading">
                <p class="hero-text">The more that you read, the more things you will know. The more that you learn, the more places you'll go.</p>
                <p class="hero-text" id="text"> Learn and Grow with us! </p>
            </div>
            <div class="explore-btn">
                <input type="button" value="Explore Now" onclick="window.location.href='mainpage.php'">
            </div>
        </div>
    </div>
    </video>

</body>
</html>