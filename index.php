<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')) {
    header('Location: login.php');
    die;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Main</title>
</head>
<body>
<h1>Hello <?php echo $_SESSION['username']?></h1>

<a href="logout.php">Logout</a>


</body>
</html>
