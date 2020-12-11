<?php
    session_start();
    include('../connection.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Bootstrap Links -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container p-4 my-5 bg-primary text-white border">
        <h1>Activate your Account</h1>
        <!-- <button class="btn btn-dark  my-4">Login</button> -->
        <?php
            // If email and activation key is missing show error
            if(!isset($_GET['email']) && !isset($_GET['key'])) {
                echo "<div>There was an error. Please click on the Activation link you received by Email</div>";
                exit;
            }

            $email = $_GET['email'];
            $key = $_GET['key'];

            // Prepare variables for the query
            $email = mysqli_escape_string($link, $email);
            $key = mysqli_escape_string($link, $key);

            $sql = "UPDATE users SET activation='activated' WHERE(email = '$email' && activation='$key')";
            $result = mysqli_query($link, $sql);
            if(!$result){
                echo "<div class='alert alert-danger'>ERROR running the query</div>";
                exit;
            }

            if(mysqli_affected_rows($link)==1){
                echo "<div class='alert alert-success'>Your Account has been Activated</div>";
                echo "<a href='signin-form.php' class='btn-lg btn-success my-3'>Login</a>";
            }
            else{
                echo "<div class='alert alert-danger my-4'>Your Account couldn't be Activated. Please try again later</div>";
                // echo "<div class='alert alert-danger'>".mysqli_error($link)."</div>";
            }
            // if($_GET['email'] == $_SESSION['email']){
            //     echo $_SESSION['user_id'];
            // }

        
        ?>
    </div>
</body>
</html>