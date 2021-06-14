<?php
    
    error_reporting(0);
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
                        $vkey = md5(time() . $email);
                        $query = "UPDATE Accounts set email ='$email', vkey = '$vkey', Enabled = 0 WHERE email = '$username' ";
                        $result2 = mysqli_query($connection, $query);
                        
                        if($result1 && $result2){
                            $to = $email;
                            $subject = "Email Verification";
                            $message = "Tanks for useing our website <br> please clic the link below to verifie your account :) <br>";
                            $message .= "<a href='http://localhost/booxchange/Verification/verification.php?vkey=$vkey' >Verifie my account</a>";
                            $headers = "FROM BOOXCHANGE@gmail.com";
                            $headers .= "MIME-Vesion: 1.0" . "\r\n";
                            $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
                            // mail($to,$subject,$message,$headers);
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