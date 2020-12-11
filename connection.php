<?php
    $link = mysqli_connect('localhost', 'root', '', 'online e-book');
    if(mysqli_connect_error()) {
        echo("ERROR: Unable to connect ".mysqli_connect_error($link));
    }
    else{
        // echo "Successfully Connected to Database";
    }
?>