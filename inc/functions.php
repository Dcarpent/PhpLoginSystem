<?php

// redirects to login page if not logged in
function forceLogin() {   
    if (isset($_SESSION['user_id'])) {
        // the user is allowed here
    }
    else {
        // user is not allowed here 
        header("location:" . URLROOT ."/login.php");
        exit;
    }
}    

// forces redirects to dashboard
function forceDashboard() {   
    if (isset($_SESSION['user_id'])) {
        //  user is logged in so recirect
        header("location:" . URLROOT ."/dashboard.php");
        exit;
    }
    else {
        // user is not allowed here 
    }
} 


?>