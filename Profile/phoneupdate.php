<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        if(isset($_POST['phone'])){
            $localhost = 'localhost';
            $user = 'root';
            $pass = '';
            $database = 'BOOXCHANGE';
            $username = $_SESSION['username'];
            $phone = $_POST['phone'];
            if(!empty($phone)){
            $connection = mysqli_connect($localhost,$user, $pass);
            if($connection){
                $db = mysqli_select_db($connection, $database);
                if($db){
                    $query = "UPDATE user set phone = '$phone' WHERE email='$username' ";
                    $result1 = mysqli_query($connection, $query);
                    
                        if($result1){
                            header('Location: ../Profile.php');
                        }else{
                            echo "Something went wrong :/";
                        }
                    }
                }
            }
        }
    }


?>