<?php
    // check if the session exists, otherwise redirect back to login page
    require_once 'check_session.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Product - Database Connectivity Example</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kimeiga/bahunya/dist/bahunya.min.css">
     

    </head>
    <body>

            <h1>Database Connectivity Example</h1>

            <a href="index.php">Home</a> |
            <a href="add-product.php">Add Product</a> | 
            <a href="view-products.php">View Products</a> |
         

            <hr>

            <h2>Add Product</h2>

            <form action="add-product1.php" method="post">
                <table>
                    <tr>
                        <td>Product Name:</td>
                        <td>
                            <input type="text" name="productName">
                        </td>
                    </tr>
                    <tr>
                        <td>Product Price:</td>
                        <td>
                            <input type="text" name="productPrice">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Add Product">
                        </td>
                    </tr>
                </table>
            </form>

            <?php
                // TO DO - print the message if insertion was successful or not

                if (isset($_REQUEST['msg'])) 
                {
                    $result = $_REQUEST['msg'];
                    if($result == 'success'){
                        echo "Product added";

                    }
                 else 
                 {
                    echo "Product Not added";
                }
            }
                
            ?>
            <form action="logout.php" method="post">
                <input type="submit" value="Logout">
            </form>

    </body>
</html>
