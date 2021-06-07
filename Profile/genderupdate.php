<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        if(isset($_POST['genre'])){
            $localhost = 'localhost';
            $user = 'root';
            $pass = '';
            $database = 'BOOXCHANGE';
            $username = $_SESSION['username'];
            $genre = $_POST['genre'];
            if(!empty($genre)){
            $connection = mysqli_connect($localhost,$user, $pass);
            if($connection){
                $db = mysqli_select_db($connection, $database);
                if($db){
                    $query = "UPDATE user set gender ='$genre' WHERE email='$username' ";
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