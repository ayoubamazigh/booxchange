<?php

    error_reporting(0);
    session_start();

    $html = <<<HTML
        <html lang='fr'>
            <head>
                <title>Booxchange.com</title>
                <meta charset='utf-8' />
            </head>
                <link rel='icon' href='assest/img/favicon.png'>
                <link href="assest/css/bootstrap.css" rel="stylesheet" >
                <link href='assest/css/register-style.css' rel='stylesheet'>
                <link href='assest/css/profile.css' rel='stylesheet'>
                <link href='assest/css/thankyou.css' rel='stylesheet'>
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
                                <div class='my-connexion'>Inscription</div>
                                <div class='my-input-explainer' >Prénom:</div>
                                <div >
                                    <input class='my-input' type="text" name='firstname' placeholder='Tapez votre prénom' required>
                                </div>
                                <div class='my-input-explainer' >Nom:</div>
                                <div >
                                    <input class='my-input' type="text" name='lastname' placeholder='Tapez votre nom' required>
                                </div>
                                <div class='my-input-explainer' >Date de naissance:</div>
                                <div >
                                    <input class='my-input' type="date" name='date' required>
                                </div>
                                <div class='my-input-explainer' >E-mail:</div>
                                <div >
                                    <input class='my-input' type="E-mail" name='email' placeholder='Tapez votre e-mail' required>
                                </div>
                                <div class='my-input-explainer' >Téléphone:</div>
                                <div >
                                    <input class='my-input' type="text" name='phone' placeholder='tapez votre numéro de téléphone' required>
                                </div>
                                <div class='my-input-explainer' >Mot de passe:</div>
                                <div >
                                    <input class='my-input' type="Password" name='password1' placeholder='tapez votre mot de passe' required>
                                </div>
                                <div class='my-input-explainer' >Retaper votre mot de passe:</div>
                                <div >
                                    <input class='my-input' type="password" name='password2' placeholder='conformez votre mot de passe' required>
                                </div>
                                <div class='my-input-explainer' >Genre:</div>
                                <div class='my-gender-box'>
                                    <div><input class='my-input-radio' type="radio" id='chkm' name='chk' value='m'><label for='chkm' >Homme</label></div>
                                    <div><input class='my-input-radio' type="radio" id='chkf' name='chk' value='f'> <label for='chkf' >Femme</label></div>
                                </div>
                                <div>
                                <button type="submit" class="my-btn" >
                                    Register    
                                </button>

        
        HTML;

    if(isset($_GET['PDM'])){
        $html .= "<div style='margin-bottom: 1rem; text-align: center; font-size: 1.2rem; color: red;' >Passwords don't match!</div>";
    }

    if(isset($_GET['PTS'])){
        $html .= "<div style='margin-bottom: 1rem; text-align: center; font-size: 1.2rem; color: red;' >Password must be greater than 8 charcters!</div>";
    }

    if(isset($_GET['UER'])){
        $html .= "<div style='margin-bottom: 1rem; text-align: center; font-size: 1.2rem; color: red;' >Unkown error happened!</div>";
    }

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

            if($password1 != $password2){
                header('location: reg.php?PDM=1');
            }else{
                if(strlen($password1) < 8 ){
                    header('location: reg.php?PTS=1');
                }else{
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
                                    $headers = "from: booxchange101@gmail.com";
                                    $headers .= "MIME-Vesion: 1.0" . "\r\n";
                                    $headers .= "Content-type:text/html; charset=UTF-8" . "\r\n";
                                    // mail($to,$subject,$message,$headers);
                                    header('Location: reg.php#thankyou'); 
                                }else{
                                    header('location: reg.php?UER=1');
                                }
                            
                            }
                        }   
                    }
    
                } 
            }
        
        }else{
        
            $html .= <<<HTML
                                <div class='my-input-link mt-3 mb-2'>
                                    <a class='my-link' href="login.php" ><center>J'ai déjà un compte</center></a>
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

        <div id="thankyou" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="content">
                <br>
                <center>
                    <div class="tankyou-titre">Thank You!</div>
                </center>
                <center>
                    <p class="paragraph">
                        <strong>Please check your email</strong> for further instructions on how to complete your account setup.
                    </p>
                </center>
                <hr>
                    <center>
                        <p class="paragraph2">
                        <a class="btn btn-primary btn-sm" href="login.php" role="button">Connexion</a>
                        </p>
                    </center>
                </div>
            </div>
        </div>