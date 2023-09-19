<?php
    ob_start();
    require_once 'connection.php';

    $username = $_REQUEST['username'];
    //password_hash() is used to encrypt the password  
    $hashed_password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);

    // check if the username exists
    $query = "Select username from Users where username = '$username';";
    $result = mysqli_query($conn, $query);

    // if a row was fetched, username exists
    if (mysqli_num_rows($result) > 0)
    {
        header('location:register.php?msg=userexists');
        ob_end_flush();
        die();
    }
    else
    {
        // insert the user info to the database
        $query = "Insert into Users (username, password) Values ('" . $username . "', '" . $hashed_password . "');";

        $result = mysqli_query($conn, $query);

        if ($result == 1)
        {
            header('location:register.php?msg=success');
        }
        else
        {
            header('location:register.php?msg=fail');
        }
    }
?>
