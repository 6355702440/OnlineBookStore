<?php
    include 'connection.php';
    session_start();
    $userid = $_SESSION['user_id'];
    $username = $_SESSION['username'];
    $email = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="icon" href="images/icons/profile.png" type="image/png"/> 

    <!-- Bootstrap links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- CSS file -->
    <link href="styling/profile_form.css" type="text/css" rel="stylesheet"/>
    <link href="styling/media-queries/media-profile.css" type="text/css" rel="stylesheet"/>
    <link href="styling/common1.css" type="text/css" rel="stylesheet"/>
</head>
<style>

    .container{
        margin: 40px 80px;
    }
    .deleteaccount{
        background-color: rgb(191,20,9);
        font-weight: 500;
    }
    
    
</style>
<body>
    <div class="navigation">
        <?php 
            require('navigation.php');
        ?>
    </div>
    
    
    <h2 class="profile_heading">EDIT YOUR PROFILE</h2>
    <div class="container">
        <div class="profileavatar">
            <?php
                if(isset($_SESSION)){
                    $username = $_SESSION['username'];
                    list($fname, $lname) = explode(' ', $username, 2);
                    $name = $fname[0].$lname[0];
                   
                    echo "<div class='useravatar' id='profileavatarname'>".$name."</div>";
                    echo "<div class='useravatar' id='profileavatar'><img src='images/icons/nameavatar.png' style ='width: 100px; height: 100px;' ></div>";
                }
            ?>
        </div>
        <?php
        if(!isset($_POST['update_btn']))
        {
        ?>
        <div class="updateform" class="col-sm-8">
            <div id="updatemessage"></div>
            <form id="updateform" method="POST">
                <div class="form-group">
                    <label for="name" class="text-primary">Your Name</label>
                    <input type="text" class="form-control"name="name" id="name" value="<?php echo $username;?>">
                </div>
                <div class="form-group">
                    <label for="email" class="text-primary">Your Email</label>
                    <input type="email" class="form-control" name="email" id="emaill" value="<?php echo $email;?>">
                </div>

                <button type="submit" class="bt" id="updatebtn"  name="update_btn" data-toggle="modal">Update Profile</button>
                <button type="button" class="bt deleteaccount pull-right" id="deletebtn">Close Account</button>
            </form>
        </div>
        <?php
        } 
        ?>
    </div>
    
    
    <!-- Modal -->
        <?php
        if(isset($_POST['update_btn']))
        {
        ?>
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content -->
                <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>Some text in the modal.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
                </div>

            </div>
        </div>
        <?php
        } 
        ?>
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/index10.js"></script>

    <style>
        .discover{
            visibility: hidden;
        }
        .deleteaccount{
            background-color: rgb(191,20,9);
            font-weight: 500;
        }
    
    </style>
</body>
</html>