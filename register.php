<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Register - User Registration and Login using PHP</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/kimeiga/bahunya/dist/bahunya.min.css">
    </head>
    <body>
        <div id="wrapper">
            <?php
                require_once 'header.php';
            ?>

            <h2>Register</h2>

            <form action="register1.php" method="post">
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
                        <td colspan="2"><input type="submit" value="Register"></td>
                    </tr>
                </table>
            </form>

            <?php
                if (isset($_REQUEST['msg']))
                {
                    if ($_REQUEST['msg'] == "success")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-success alert-dismissable fade in'>";
                        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        echo "<strong>Success!</strong> New user was registered.";
                        echo "</div></div>";
                    }
                    else if ($_REQUEST['msg'] == "fail")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-danger alert-dismissable fade in'>";
                        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        echo "<strong>Fail!</strong> New user was not registered.";
                        echo "</div></div>";
                    }
                    else if ($_REQUEST['msg'] == "userexists")
                    {
                        echo "<br><div id='msg'>";
                        echo "<div class='alert alert-danger alert-dismissable fade in'>";
                        echo "<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>";
                        echo "<strong>Fail!</strong> This username is already taken up. Please try again.";
                        echo "</div></div>";
                    }
                }
            ?>
    
    </body>
</html>
