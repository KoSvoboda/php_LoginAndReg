<?php
include_once "actions/checkLogin.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Main</title>
</head>
<body>
<?php
var_dump($_SESSION);
if ($isLog == false) {
    include_once "forms/loginForm.php";
    include_once "forms/regForm.php";
}
?>
<?php
if ($isLog == true) {
    echo '<h1>Hello ' . $_SESSION['username'] . '</h1>';
    echo '<a href="actions/logoutAction.php">Logout</a>';
}
?>



<?php include_once "includes/footer.php"; ?>
</body>
</html>
