 <?php
    // Start Session
    session_start();

    // Connect to the Database
    include('../connection.php');
    // <!--Check user inputs-->
    // <!--Define error messages-->
    
    $missingUsername = '<p><strong>Please enter a Username!</strong></p>';
    $missingEmail = '<p><strong>Please enter your Email Address!</strong></p>';
    $invalidEmail = '<p><strong>Please enter a valid Email Address!</strong></p>';
    $missingPassword = '<p><strong>Please enter a Password!</strong></p>';
    $invalidPassword = '<p><strong>Your password should be at least 6 characters long and inlcude one capital letter and one number!</strong></p>';
   
    $errors = "";

    // <!-- Get username, email, password -->
    // Get username
    if(empty($_POST['username'])){
        $errors .= $missingUsername;
    }
    else{
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
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

    // Get Passwords
    if(empty($_POST['password'])){
        $errors .= $missingPassword;
    }
    elseif(!(strlen($_POST['password'])>6 && preg_match('/[A-Z]/', $_POST['password']) && preg_match('/[0-9]/', $_POST['password']))) {
        $errors .= $invalidPassword;
    }
    else{
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    }


    if($errors){
        $resultMessage = "<div class='emessage' '>".$errors."</div>";
        echo $resultMessage;
        exit;
    }

    // Prepare variables for the query
    // $username = mysqli_real_escape_string($link, $username);
    // $email = mysqli_real_escape_string($link, $email);
    // $password = mysqli_real_escape_string($link, $password);
    // $password = hash('sha256', $password);
    
    
    // If username exists in the users table print error
    $sql = "SELECT *  FROM users WHERE username='$username'"; 
    $result = mysqli_query($link, $sql);
    if(!$result) {
        echo "<div class='emessage'>ERROR:Running the query</div>";
        exit;
    }

    // $results = mysqli_num_rows($result);
    if(mysqli_num_rows($result)){
        echo "<div class='emessage'>That username already exists! </div>";
        exit;
    }

    // If email exists in the users table print error
    $sql = "SELECT *  FROM users WHERE email='$email'"; 
    $result = mysqli_query($link, $sql);
    if(!$result) {
        echo "<div class='emessage'>ERROR:Running the query</div>";
        exit;
    }
    // $results = mysqli_num_rows($result);
   
    if(mysqli_num_rows($result)){
        echo "<div class='emessage'>That Email already Registered! </div>";
        exit;
    }


    $activationKey = bin2hex(openssl_random_pseudo_bytes(16));
    // $activationKey = "Not Activated";
   

    $sql = "INSERT INTO users(`username`, `email`, `password`, `activation`) VALUES('$username', '$email', '$password', '$activationKey')";
    $result = mysqli_query($link, $sql);
    if(!$result) {
        echo "<div class='emessage'>There was an error inserting the users details in the users Table</div>";
        exit;
    }

   
    // Sending mail to the user if no errr found
    $message = "Please click on the link to activate your Account:\n\n";
    // $message .= "http://localhost/PHP/Projects/OnlineBookStore/registration/activate.php?email=".urlencode($email)."&key=$activationKey";
    
    // $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";  
    // $CurPageURL = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];  
    // echo "The URL of current page: ".$CurPageURL;  

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['activate.php'];    
      
    echo $url;  
    $message .= $url;

    if(mail($email, 'Confirm your Registration', $message, 'From:'.'dharaparikh566@gmail.com')){
        echo "<div class='smessage'>Thankyou for registering. A Confirmation message has been sent to $email. Please click on the activation link to activate your Account.</div>";
    }

    
?>
