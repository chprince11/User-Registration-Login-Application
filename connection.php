<?php
    // connect to the database
    $host = 'localhost';                    // database server name
    $user = 'root';                  // your database username
    $pswd = '';                  // your database password
    $dbName = 'test1';                    // database name

    $conn = mysqli_connect($host, $user, $pswd, $dbName);

    if (empty($conn))
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo "Connection done!";
    }

    //In this example we used "Users" table from "test" database
    //Users table with two columns "username" and "password" of type "varchar"
    //Length of username=20
    //length of password=80

    //to make any page secure include check_session.php file in oyur code