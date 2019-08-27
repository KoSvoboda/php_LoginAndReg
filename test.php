<?php
$users = simplexml_load_file('users.xml');
print_r($users);
echo $users;
//$result = $users->xpath('users/'.$username.'/username');
foreach ($users->children() as $user) {
    if ($user['username']=='123') echo 'OK';
}