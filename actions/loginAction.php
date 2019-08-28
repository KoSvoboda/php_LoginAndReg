<?php
$username = $_POST['username'];
$password = md5($_POST['password'].'DoNotHacks');
$users = simplexml_load_file('http://localhost/manaologin/users.xml');
foreach ($users->children() as $user) {
    if ($user['username'] == $username) {
        if ($user->password == $password) {
            session_start();
            $_SESSION['username'] = $username;
            echo json_encode(array('success' => 'Success'));
            die;
        }
        else break;
    }
}
echo json_encode(array('success' => 'Invalid username and/or password'));
