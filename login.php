<?php
include_once 'actions/loginAction.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form method="post" action="">
            <p>Username <input type="text" name="username" size="20"></p>
            <p>Password <input type="password" name="password" size="20"></p>
            <?php
            if($error) {
                echo '<p>Invalid username and/or password</p>';
            }
            ?>
            <p><input type="submit" value="Login" name="login"></p>
            <a href="register.php">Register</a>
        </form>

        <?php //include_once "footer.php"; ?>

    </body>
</html>