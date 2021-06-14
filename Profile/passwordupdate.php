<?php
    error_reporting(0);
    session_start();
        if(isset($_SESSION['username']) && isset($_SESSION['password'])){
            
            if(isset($_POST['oldpass']) && isset($_POST['newpass1']) && isset($_POST['newpass2'])){
                $localhost = 'localhost';
                $user = 'root';
                $pass = '';
                $database = 'BOOXCHANGE';
                $username = $_SESSION['username'];
                $oldpass = $_POST['oldpass'];
                $newpass1 = $_POST['newpass1'];
                $newpass2 = $_POST['newpass2'];
                
                if(!empty($oldpass) && !empty($newpass1) && !empty($newpass2) && !empty($username)){
                    $connection = mysqli_connect($localhost,$user, $pass);
                    
                    if($connection){
                        $db = mysqli_select_db($connection, $database);
                    if($db){
                        $password = md5($newpass1);
                        $query = "UPDATE Accounts SET password = '$password' WHERE email='$username' ";
                        $result = mysqli_query($connection, $query);
                        
                        if($result){
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