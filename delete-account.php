<?php
    include('connection.php');
    session_start();
    $user_id = $_SESSION['user_id'];

    $sql = "DELETE FROM users WHERE user_id='$user_id'";
    $result = mysqli_query($link, $sql);
    if(!$result){
        echo "<div class='alert alert-danger'>Error: There's some problem!</div>".mysqli_error($link);
    }
    else{
        echo "<div class='alert alert-success'>Deleted Record Successfully!</div>";
    }
?>