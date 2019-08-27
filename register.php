<?php
$errors = array();
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    if(file_exists('/users' . $username . '.xml')) {
        $errors[] = 'Username already exists';
    }
    if($username == '') {
        $errors[] = 'Username is blank';
    }
    if($email == '') {
        $errors[] = 'Email is blank';
    }
    if($email == '') {
        $errors[] = 'Email is blank';
    }
    if($name == '') {
        $errors[] = 'Name is blank';
    }
    if($password == '') {
        $errors[] = 'Passwords are blank';
    }
    if($password != $c_password) {
        $errors[] = 'Passwords do not match';
    }
    if(count($errors) == 0) {
        $users = simplexml_load_file('users.xml');
        $user = $users->addChild('user');
        $user->addAttribute('username', $username);
        $user->addChild('password', md5($password.'DoNotHacks'));
        $user->addChild('email', $email);
        $user->addChild('name', $name);
        $users->asXml('users.xml');
        header('Location: login.php');
        die;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Register</h1>
        <form method="post" action="">
            <?php
            if(count($errors) > 0) {
                echo '<ul>';
                foreach ($errors as $e) {
                    echo '<li>' . $e . '</li>';
                }
            }
            ?>
            <p>Username <input type="text" name="username" size="20" required></p>
            <p>Name <input type="text" name="name" size="20" required></p>
            <p>Email <input type="text" name="email" size="20" required></p>
            <p>Password <input type="password" name="password" size="20" required></p>
            <p>Confirm Password <input type="password" name="c_password" size="20" required></p>
            <p><input type="submit" name="login" value="Login"></p>
        </form>

        <?php //include_once "footer.php"; ?>

    </body>
</html>