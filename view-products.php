<?php
    // check if the session exists, otherwise redirect back to login page
    require_once 'check_session.php';
?>
<?php
require_once 'connection.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>View Products - Database Connectivity Example</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kimeiga/bahunya/dist/bahunya.min.css">
    </head>
    <body>
        <div id="wrapper">

            <h1>Database Connectivity Example</h1>

            <a href="index.php">Home</a> | 
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a>

            <hr>

            <h2>View Products</h2>

                <?php
                    // TO DO - write code to select and display records in HTML table

                    // connect with database


                    // write query
                    $query = "SELECT * FROM `product`";   // query

                    //execute the query
                    $res = mysqli_query($conn,$query);    // execute query

                    //display rows from result
                    if (mysqli_num_rows($res) > 0) {
                        // display table content
                        // then fetch row by row
                        
                       while($row = mysqli_fetch_assoc($res)) // associtive array - instead of index 0,1,2 there wonna be string as a index
                       {
                        echo " <br > " . $row['product name'];
                        echo " " .  $row['product price'];
                       }
                    } else {
                    echo "Table empty";
                    }
                    
                ?>
                <form action="logout.php" method="post">
                <input type="submit" value="Logout">
            </form>
        
    </body>
</html>
