<?php
if($_COOKIE["login-status"] == "true"){
    // echo "<script>window.location.href = 'index.php';</script>";
}else{
    echo "<script>window.location.href = '../marketlogin.php';</script>";
}
?>