<?php
    session_start();
    $curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
    // if($curPageName === "index.php?logout=1"){
        if(isset($_SESSION['user_id']) && $_GET['logout'] == 1){
            session_destroy();
            // setcookie("rememberme", "", time()-3600);
            
        }
    // }

?>