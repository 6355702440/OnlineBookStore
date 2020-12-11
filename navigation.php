<?php
    include('connection.php');
    if(!isset($_SESSION)){
        session_start();
    }
    // echo $_SESSION['user_id'];
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navigation</title>
    
    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Google Font Link -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Css Links -->
    <link href="styling/navigation_bar1.css" type="text/css" rel="stylesheet"/>
    <link href="styling/media-queries/media_navigation1.css" type="text/css" rel="stylesheet"/>
    <style>
        
            a{
                color: #247d64;
                font-weight: 400;
                margin: 10px 0;
            }

            .fa{
                color: white;
                margin-left: 2rem;
                cursor: pointer;
            }
            .navbar{
                overflow: hidden;
                /* background-attachment: */
                
            }
            
            .dropdown_div{
                display: none;
            }
    
    </style>
    
</head>

<body>
    <nav class="navbar navbar-inverse navbar">
        
        <div class="container-fluid">
            <div>
                <div class="header">
                    <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
                    <div class="logo">
                        <a href="mainpage.php">   
                            <img src="images/icons/logos.png" alt="">
                        </a>
                    </div>
                    <div class="discover">
                        <span>Discover</span>
                        <a><i class="fa fa-caret-down" aria-hidden="true"></i></a>
                    </div>

                    <?php
                        if(isset($_SESSION['user_id'])){
                                $username = $_SESSION['username'];
                                list($fname, $lname) = explode(' ', $username, 2);
                                $name = $fname[0].$lname[0];
                                
                        
                                // echo "<div class='useravatarn' id='avatarname'>".$name."</div>";
                                echo "<div class='useravatarn' id='avatar'><img src='images/icons/nameavatar.png' style ='width: 50px; height: 48px;' ><span id='avatarname'>".$name."</span></div>";
                        }
                        else{
                                echo "<div class='login'><a href='registration/signin-form.php'>Login</a></div>";
                        }
                    ?>
                    
                            
                    
            </div>
        </div>

        
        
    </nav>


    <div class="dropdown_div">
        <ul class="dropdown_menu">
            <li><a href="#Ficandlitcontent" class="Ficandlit">Fiction & literature</a></li>
            <li><a href="#sciandrescontent" class="sciandres">Science and Research</a></li>
            <li><a href="#techcontent" class="technology">Technology</a></li>
            <li><a href="#biocontent" class="biography">Biography</a></li>
            <li><a href="#lifecontent" class="lifestyle">Lifestyle</a></li>
            <li><a href="#prsnlgrowthcontent" class="personalgrowth">Personal Growth</a></li>
            <li><a href="#businesscontent" class="business">Business </a></li>
            <li><a href="#relcontent" class="religion">Religion</a></li>
        </ul>
    </div>   

    <div class="menu-bar">
            <div class="sub-menu-l"> 
                <div class="userinfo">
                <?php
                    echo "<div class='sep1' id='username'><span>". $_SESSION['username']."</span></div>";
                    echo "<div class='sep1' id='email'><span>". $_SESSION['email']."</span></div>";
                ?>                        
                </div>
                <hr style="height:1px;border-width:0;color:gray;background-color:gray; margin: 0;">
            
                <div class="logout">
                    <div class="sep2" style="padding-top: -10px;">
                        <img class="profile" src="images/icons/profile.png">
                        <a href="profile-form.php">Profile</a>
                    </div>
                    <div class="sep2">
                        <img class="logout" src="images/icons/logout.png">
                        <a href="index.php?logout=1">Log Out</a>
                    </div>
                </div>

            </div>
        </div> 
    
    
      
   
    

    

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
         $(document).ready(function(){
            $('.useravatarn').click(function(){
                $('.sub-menu-l').toggle();
            });

            $('.sub-menu-l').mouseleave(function(){
                $('.sub-menu-l').hide();
            });

            // $('.dropdown_div').hide();
            $('.discover').click(function(){
                $('.dropdown_div').toggle();
            });
            $('.dropdown_div').mouseleave(function(){
                $('.dropdown_div').hide();
            });
        });
    </script>

    <style>
       
    </style>
</body>
</html>