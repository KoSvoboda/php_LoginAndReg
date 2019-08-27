<?php
session_start();
session_destroy();
header('Location: http://localhost/manaoLogin/index.php');
