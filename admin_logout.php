<?php
session_start();

// destroy session
session_destroy();

// delete cookie
setcookie("user", "", time() - 3600, "/");

header("Location: admin_login.php");
exit();
?>