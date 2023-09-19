<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login - User Registration and Login using PHP</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kimeiga/bahunya/dist/bahunya.min.css">
   

    </head>
    <body>

            <?php
                require_once 'header.php';
            ?>
            <p>Try this login details...</p>
            <p><strong>Username:</strong> userPrince</p>
            <p><strong>Password:</strong> userPrince@123</p>

            <h2>Login</h2>

            <form action="login1.php" method="post">
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required autofocus></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="submit" value="Login"></td>
                    </tr>
                </table>
            </form>

            <?php
                //If login failed then display the message back to the user
                if (isset($_REQUEST['msg']))
                {
                    if ($_REQUEST['msg'] == "fail")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-danger alert-dismissable fade in'>";
                        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                       
                        echo "<strong>Login failed!</strong> Either username or password is incorrect. Please try again.";
                        echo "</div></div>";
                    }
                }
            ?>
        
    </body>
</html>
