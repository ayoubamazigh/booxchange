<?php
     
     if(isset($_POST['username']) && isset($_POST['password'])){
         $username = $_POST['username'];
         $password = $_POST['password'];
         if(!empty($username) && !empty($password)){
             $rememberme
             $connection = mysqli_connect('localhost', 'root', '');
             if($connection){
                 $database = 'booxchange';
                 $db = mysqli_select_db($connection, $database);
                 if($db){
                    $query = "SELECT * FROM accounts WHERE username='$username' AND password='$password' LIMIT 1;";
                    $result = mysqli_query($connection, $query);
                    $row = mysqli_fetch_array($result);
                    try{
                        if($row['username'] == $username && $row['password'] == $password){
                        echo 'you are the fucking php creator bruh :0';
                        }
                    }catch(Exception $ex){}
                 }
             }
         }
     }
         
             
             
             
             
             
             
             
             
            


     
     
     
?>