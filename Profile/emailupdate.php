<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        if(isset($_POST['email'])){
            $localhost = 'localhost';
            $user = 'root';
            $pass = '';
            $database = 'BOOXCHANGE';
            $username = $_SESSION['username'];
            $email = $_POST['email'];
            if(!empty($email)){
            $connection = mysqli_connect($localhost,$user, $pass);
            if($connection){
                $db = mysqli_select_db($connection, $database);
                if($db){
                    $query = "UPDATE user set email = '$email' WHERE email='$username' ";
                    $result1 = mysqli_query($connection, $query);
                    $query = "UPDATE Accounts set email ='$email', Enabled = 0 WHERE email = '$username' ";
                    $result2 = mysqli_query($connection, $query);
                    
                        if($result1 && $result2){
                            header('Location: ../clear.php');
                        }else{
                            header('Location: ../Profile.php');
                        }
                    }
                }
            }
        }
    }


?>