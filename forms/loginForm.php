<?php
include_once "actions/loginAction.php";
?>
<h1 class="login">Login</h1>
<form class="login" method="post" action="">
    <p>Username <input type="text" name="username" size="20" required></p>
    <p>Password <input type="password" name="password" size="20" required></p>
    <?php
    if($logError) {
        echo '<p>Invalid username and/or password</p>';
    }
    ?>
    <p><input type="submit" value="Login" name="login"></p>
</form>
