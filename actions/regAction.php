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
        $xml = new SimpleXMLElement('<user></user>');
        $xml->AddChild('password', md5($password.'DoNotHacks'));
        $xml->AddChild('email', $email);
        $xml->AddChild('name', $name);
        $xml->asXml('users/' . $username . '.xml');
        header('Location: login.php');
        die;
    }
    if (count($errors) > 0) {
        echo '<ul>';
        foreach ($errors as $e) {
            echo '<li>' . $e . '</li>';
        }
    }

}
?>