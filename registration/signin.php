<?php
    session_start();
    include('../connection.php');

    //    <!--Define error messages-->
    $missingEmail = '<p><strong>Please enter your Email Address!</strong></p>';
    $missingPassword = '<p><strong>Please enter a Password!</strong></p>';

    $errors = "";
    // If Email is not entered give error
    if(empty($_POST['email'])){
        $errors .= $missingEmail;
    }
    else{
        $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    }

    // If Password is not entered give error
    if(empty($_POST['password'])){
        $errors .= $missingPassword;
    }
    else{
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    }

    if($errors){
        $resultMessage = "<div class='emessage'>".$errors."</div>";
        echo $resultMessage;
        exit;
    }


    $email = mysqli_escape_string($link, $email);
    $password = mysqli_escape_string($link, $password);
    // $password = hash('sha256', $password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND activation='activated'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo "<div class='emessage'>ERROR running the query!</div>";
        exit;
    }

    $count = mysqli_num_rows($result);
    if($count != 1){
        echo '<div class="emessage">Wrong Email or Password</div>';
        exit;
    }
    
    echo "<div class='smessage'>success</div>";
    



    // $sql = "UPDATE users SET loginfo='loggedin' WHERE (email='$email' AND password='$password' AND activation='activated')";
    // // $sql = "UPDATE users SET activation='activated' WHERE(email = '$email' && activation='$key')";
    // $result = mysqli_query($link, $sql);
    // if(!$result){
    //     echo "<div class='emessage'>ERROR running the query!</div>";
    //     exit;
    // }

    
    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND activation='activated'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo '<div class="alert alert-danger">Error running the query!</div>';
        exit;
    }
  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];  

    
?>


