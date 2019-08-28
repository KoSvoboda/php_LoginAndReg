<?php
include_once 'actions/regAction.php';
?>
<div clss="form">
    <h1>Register</h1>
    <form id="regForm" method="post" action="">
        <?php
        if(count($regErrors) > 0) {
            echo '<ul>';
            foreach ($regErrors as $e) {
                echo '<li>' . $e . '</li>';
            }
        }
        ?>
        <p>Username <input type="text" name="username" size="20" required></p>
        <p>Name <input type="text" name="name" size="20" required></p>
        <p>Email <input type="text" name="email" size="20" required></p>
        <p>Password <input type="password" name="password" size="20" required></p>
        <p>Confirm Password <input type="password" name="c_password" size="20" required></p>
        <p><input type="submit" name="register" value="Register"></p>
    </form>
</div>

