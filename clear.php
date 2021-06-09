<?php
    session_start();
    setcookie("username", "", time());
    setcookie("password", "", time());
    session_destroy();
    header('Location: index.php');
?>