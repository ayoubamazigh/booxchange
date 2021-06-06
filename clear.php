<?php
    session_start();
    setcookie("username", "", time());
    setcookie("password", "", time());
    unset($_SESSION['password']);
    unset($_SESSION['username']);
    header('Location: index.php');
?>