<?php
$isLog = false;
$users = simplexml_load_file('users.xml');
session_start();
if(count($_SESSION) == 0) {
    return;
}
foreach ($users->children() as $user) {
    if ($user['username'] == $_SESSION['username']) $isLog = true;
}