<?php
include_once "checkLogin.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Main</title>
</head>
<body>
<h1>Hello <?php echo $_SESSION['username']?></h1>

<a href="actions/logoutAction.php">Logout</a>

<?php include_once "footer.php"; ?>
</body>
</html>
