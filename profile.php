<?php
    include('connection.php');
    session_start();
    error_reporting(0);
    // $profilename = $_POST['name'];
    // $profileemail = $_POST['email'];
    $user_id = $_SESSION['user_id'];

    $missingUsername = '<p><strong>Please enter a Username!</strong></p>';
    $missingEmail = '<p><strong>Please enter your Email Address!</strong></p>';
    $invalidEmail = '<p><strong>Please enter a valid Email Address!</strong></p>';
   
    $errors = "";

    // <!-- Get username, email, password -->
    // Get username
    if(isset($_SESSION)){
        if(empty($_POST['name'])){
            $errors .= $missingUsername;
        }
        else{
            $username = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        }
    
        // Get Email
        if(empty($_POST['email'])){
            $errors .= $missingEmail;
        }
        else{
            $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
            if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errors .= $invalidEmail;
            }
        }
    
        if($errors){
            $resultMessage = "<div class='emessage' '>".$errors."</div>";
            echo "<div class='alert alert-danger'>".$resultMessage."</div>";
            exit;
        }
    
        // Check Username exist
        if($_POST['name'] != $_SESSION['username']){
            $sql = "SELECT *  FROM users WHERE username='$username'"; 
            $result = mysqli_query($link, $sql);
            if(!$result) {
                echo "<div class='emessage'>ERROR:Running the query in username!</div>";
                exit;
            }
            if(mysqli_num_rows($result)){
                echo "<div class='alert alert-danger'>That username already exists! </div>";
                exit;
            }
        }

        // Check Email exist
        if($_POST['email'] != $_SESSION['email']){
            $sql = "SELECT *  FROM users WHERE email='$email'"; 
            $result = mysqli_query($link, $sql);
            if(!$result) {
                echo "<div class='emessage'>ERROR:Running the query in username!</div>";
                exit;
            }
            if(mysqli_num_rows($result)){
                echo "<div class='alert alert-danger'>That Email already exists! </div>";
                exit;
            }
        }
    
        if($_POST['name'] != $_SESSION['username'] && $_POST['email'] != $_SESSION['email']){
            $sql = "SELECT *  FROM users WHERE email='$email'"; 
            $result = mysqli_query($link, $sql);
            if(!$result) {
                echo "<div class='emessage'>ERROR:Running the query in email!</div>";
                exit;
            }
            if(mysqli_num_rows($result)){
                echo "<div class='alert alert-danger'>That Email already exists! </div>";
                exit;
            }
        }
        
        
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
    
    
        $sql = "UPDATE users SET email='$email', username='$username' WHERE user_id='$user_id' ";
        $result = mysqli_query($link, $sql);
        if(!$result){
            echo "<div class='alert alert-danger '>Error: There's some problem!</div>".mysqli_error($link);
        }
        else{
            echo "<div class='alert alert-success'>Updated Your Detail Successfully!</div>";
        }
        // header('Location: '.$_SERVER['REQUEST_URI']);
    }
    
?>