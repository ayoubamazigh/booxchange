<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        if(isset($_POST['date'])){
            $localhost = 'localhost';
            $user = 'root';
            $pass = '';
            $database = 'BOOXCHANGE';
            $username = $_SESSION['username'];
            $date = $_POST['date'];
            if(!empty($date)){
            $connection = mysqli_connect($localhost,$user, $pass);
            if($connection){
                $db = mysqli_select_db($connection, $database);
                if($db){
                    $query = "UPDATE user set date = '$date' WHERE email='$username' ";
                    $result = mysqli_query($connection, $query);
                    
                        if($result){
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