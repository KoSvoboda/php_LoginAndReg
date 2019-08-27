<?php
$error = true;
session_start();
$users = simplexml_load_file('users.xml');
foreach ($users->children() as $user) {
    if ($user['username'] == $_SESSION['username']);
}
$error = false;if ($error == true) {
    header('Location: login.php');
    die;
}