<?php
    session_start();
    include '../connection.php';
   

    $missingEmail = "<p><strong>Please Enter Email!</strong></p>";
    $invalidEmail = "<p><strong>Enter valid Email!</strong></p>";
    $missingPassword = "<p><strong>Please Enter Password!</strong></p>";
    $invalidPassword = "<p><strong>Your Password should be at least 6 characters long and must include one digit and one special character!</strong></p>";

    $errors = "";

    // Check if email entered or not
    if(empty($_POST['fg-email'])){
        $errors .= $missingEmail;
    }
    else{
        $email = filter_var($_POST['fg-email'], FILTER_SANITIZE_EMAIL);
    }

    // Check if email entered or not
    if(empty($_POST['fg-pass'])){
        $errors .= $missingPassword;
    }
    elseif(!(strlen($_POST['fg-pass']) > 6 && preg_match('/[A-Z]/', $_POST['fg-pass']) && preg_match('/[0-9]/', $_POST['fg-pass'])) ){
        $errors .= $invalidPassword;
    }
    else{
        $password = filter_var($_POST['fg-pass'], FILTER_SANITIZE_STRING);
    }

    // If errors print error
    if($errors){
        $resultMessage = "<div class='alert alert-danger'>" . $errors . "</div>";
        echo $resultMessage;
        exit;
    }

    $email = mysqli_escape_string($link, $email);
    $password = mysqli_escape_string($link, $password);

    $sql = "SELECT * FROM users WHERE email='$email' ";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo "<div class='alert alert-danger'>ERROR: Running the query!</div>";
        exit;
    }

    $count = mysqli_num_rows($result);
    if($count != 1){
        echo "<div class='alert alert-danger font-weight-bold'>That Email does not exist!</div>";
        exit;
    }

    $sql = "UPDATE  users SET password='$password' WHERE email='$email' ";
    $result = mysqli_query($link, $sql);
    if($result){
        echo "<div class='alert alert-success font-weight-bold'>Password updated successfully!  <strong ><a href='http://localhost/PHP/Projects/OnlineBookStore/registration/signin-form.php'>Login Now</a></strong></div>";
    }
    else{
        echo "<div class='alert alert-danger font-weight-bold'>ERROR: Running the query!</div>";
    }
   
?>