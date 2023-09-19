<?php
//This code you can use to make any page as secure page
    
    // start the session
    session_start();
    
    // if the session doesn't exist
    if (!isset($_SESSION['username']))
    {
        // redirect back to login page
        header('location:login.php');
    }
 