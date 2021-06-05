<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
         $username = $_SESSION['username'];
        echo "Bonjour $username";
    }else{
        header('location:login.php');
    }
?>