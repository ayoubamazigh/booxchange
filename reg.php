<?php

    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        header('Location: home.php');
    }else if(isset($_COOKIE['username']) && isset($_COOKIE['password'])){
        $localhost = 'localhost';
        $user = 'root';
        $pass = '';
        $database = 'BOOXCHANGE';
        $connection = mysqli_connect($localhost,$user, $pass);
        $username = $_COOKIE['username'];
        $password = $_COOKIE['password'];
        
        if($connection){
            $db = mysqli_select_db($connection, $database);
                 
            if($db){
                $query = "SELECT * FROM accounts WHERE username='$username' AND password='$password' LIMIT 1;";
                $result = mysqli_query($connection, $query);
                $row = mysqli_fetch_array($result);
                try{
                    if($row['username'] == $username && $row['password'] == $password){
                        $_SESSION['username'] = $username;
                        $_SESSION['password'] = $password;
                        header('Location: home.php');
                    }
                }catch(Exception $ex){
                        //echo $ex;
                    }
                 }
             }
        
    }else if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['phone']) && isset($_POST['date'])  && isset($_POST['email'])  && isset($_POST['password1']) && isset($_POST['chk']) && isset($_POST['password2'])){
         $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $date = $_POST['date'];
         $email = $_POST['email'];
         $password1 = $_POST['password1'];
         $password2 = $_POST['password2'];
         $phone =  $_POST['phone'];
         $gender = $_POST['chk'];

         if(!empty($firstname) && !empty($lastname) && !empty($date) && !empty($email) && !empty($password1) && !empty($password2) && !empty($phone) && !empty($gender)){
             $localhost = 'localhost';
             $user = 'root';
             $pass = '';
             $database = 'BOOXCHANGE';
             $connection = mysqli_connect($localhost,$user, $pass);

             if($connection){
                 $db = mysqli_select_db($connection, $database);
                 if($db){
                    $query = "INSERT INTO USER VALUES ('$firstname','$lastname','$date','$email','$phone','$gender','null')";
                    mysqli_query($connection, $query);
                    $vkey = md5(time() . $email . $firstname);
                    $password = md5($password1);
                    $query = "INSERT INTO Accounts values('$email','$password','$vkey',0)";
                    $inserted = mysqli_query($connection, $query);
                    if($inserted){
                        $to = $email;
                        $subject = "Email Verification";
                        $message = "Tanks for useing our website <br> please clic the link below to verifie your account :) <br>";
                        $message .= "<a href='http://localhost/booxchange/Verification/verification.php?vkey=$vkey' >Verifie my account</a>";
                        $headers = "FROM BOOXCHANGE@gmail.com";
                        $headers .= "MIME-Vesion: 1.0" . "\r\n";
                        $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
                        
                        echo "skljfksj";
                        // mail($to,$subject,$message,$headers);
                        header('Location: tankyou.html');
                        
                    }else{
                        echo 'errour';
                    }
                     
                     
                    
                }
             }
        }
             }else{
        $html = <<<HTML
        <!DOCTYPE HTML>

<html lang='fr'>
    <head>
        <title>Booxchange.com</title>
        <meta charset='utf-8' />
    </head>
    
        <link rel='icon' href='assest/img/favicon.png'>
        <link href="assest/css/bootstrap.css" rel="stylesheet" >
        <link href='assest/css/register-style.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">        
    <body>
        <form action="#" method="POST">
        <div class='container my-login-container'>
            <div class='row'>
                <div class='col-md-12 col-sm-12 col-lg-5 col-xs-12 p-0'>
                    <div class='my-login-image' ></div>
                </div>
                <div class='col-md-12 col-sm-12 col-lg-7 col-xs-12 my-login-side-container'>
                    <div class='my-connexion'>Registration</div>
                    <div class='my-input-explainer' >First Name:</div>
                    <div >
                        <input class='my-input' type="text" name='firstname' placeholder='Enter your first name' required>
                    </div>
                    <div class='my-input-explainer' >Last Name:</div>
                    <div >
                        <input class='my-input' type="text" name='lastname' placeholder='Enter your last name' required>
                    </div>
                    <div class='my-input-explainer' >Date of Birth:</div>
                    <div >
                        <input class='my-input' type="date" name='date'>
                    </div>
                    <div class='my-input-explainer' >Email:</div>
                    <div >
                        <input class='my-input' type="Email" name='email' placeholder='Enter your Email' required>
                    </div>
                    <div class='my-input-explainer' >Telephone:</div>
                    <div >
                        <input class='my-input' type="text" name='phone' placeholder='Enter your phone number' >
                    </div>
                    <div class='my-input-explainer' >Password:</div>
                    <div >
                        <input class='my-input' type="Password" name='password1' placeholder='Enter your password' required>
                    </div>
                    <div class='my-input-explainer' >Repeate password:</div>
                    <div >
                        <input class='my-input' type="password" name='password2' placeholder='Entrez votre password' required>
                    </div>
                    <div class='my-input-explainer' >Gender:</div>
                    <div class='my-gender-box'>
                        <div><input class='my-input-radio' type="radio" id='chkm' name='chk' value='m'><label for='chkm' >MALE</label></div>
                        <div><input class='my-input-radio' type="radio" id='chkf' name='chk' value='f'> <label for='chkf' >FEMALE</label></div>
                    </div>
                    <div>
                    <button type="submit" class="my-btn" >
                        Register    
                    </button>
                    <div class='my-input-link mt-3 mb-2'>
                        <a class='my-link' href="#" ><center>I alredy have an account</center></a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
      </form>
    </body>
</html>
HTML;
        echo $html;
    }
             
             
             
             
             
             
    
     
?>