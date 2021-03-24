<?php
 session_start();
$_SESSION['username'] = '';
unset($_SESSION['username']);
session_start();
session_destroy();
header("location:login.php");
?>