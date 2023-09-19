<?php
    // TO DO - write code to insert a record to database

    // connect with database

    // require - includes multiple times , require_once - only one time
    require_once 'connection.php';

    //get values from form
    $pname = $_REQUEST['productName'];
    $pprice = $_REQUEST['productPrice'];

    // SQL query to insert

    $myQuery = "INSERT INTO `product`(`product name`, `product price`) VALUES ('$pname',$pprice)";

    // execute query
    $res = mysqli_query($conn,$myQuery);

    // check if inserted
    if($res == 1)
    {
        // echo "Product Added";
        header("location:add-product.php?msg=success"); // no echo before the header
    }

    else
    {
        // echo "Product not Added";
        header("location:add-product.php?msg=fail");
    }


?>
