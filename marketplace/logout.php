<?php
ob_start();
session_start();
session_destroy();
header("Location: marketlogin.php");
setcookie("login-status", "", time() - 3600, "/");
exit();
?>