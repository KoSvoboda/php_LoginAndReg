<?php
$logError = false;
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password'].'DoNotHacks');
    $users = simplexml_load_file('users.xml');
    foreach ($users->children() as $user) {
        if ($user['username'] == $username)
            if ($user->password == $password) {
                session_start();
                $_SESSION['username'] = $username;
                header('Location: http://localhost/manaoLogin/index.php');
                die;
            }
    }
    $logError = true;
}
