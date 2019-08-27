<?php
$regErrors = array();
if(isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $c_password = $_POST['c_password'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $users = simplexml_load_file('users.xml');
    foreach ($users->children() as $user) {
        if ($user['username'] == $username) $regErrors[] = 'Username already exists';
    }
    if($username == '') {
        $regErrors[] = 'Username is blank';
    }
    if($email == '') {
        $regErrors[] = 'Email is blank';
    }
    foreach ($users->children() as $user) {
        if ($user->email == $email) $regErrors[] = 'Email already busy';
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $regErrors[] = 'Not a valid email address';
    }
    if($name == '') {
        $regErrors[] = 'Name is blank';
    }
    if($password == '') {
        $regErrors[] = 'Passwords are blank';
    }
    if($password != $c_password) {
        $regErrors[] = 'Passwords do not match';
    }
    if(count($regErrors) == 0) {
        $users = simplexml_load_file('users.xml');
        $user = $users->addChild('user');
        $user->addAttribute('username', $username);
        $user->addChild('password', md5($password.'DoNotHacks'));
        $user->addChild('email', $email);
        $user->addChild('name', $name);
        $users->asXml('users.xml');
        //header('Location: http://localhost/manaoLogin/login.php');
        //die;
    }
}