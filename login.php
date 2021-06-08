<?php




        $html = <<<HTML
            
            <html lang='fr'>
            <head>
                <title>Booxchange.com</title>
                <meta charset='utf-8' />
            </head>
    
        <link rel='icon' href='assest/img/favicon.png'>
        <link href="assest/css/bootstrap.css" rel="stylesheet" >
        <link href='assest/css/login-style.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">  
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">        
        <body>
            <form action="#" method="POST">
                <h2 class='my-title'>Login Page</h2>
            <div class='container my-login-container'>
                <div class='row'>
                    <div class='col-md-12 col-sm-6 col-lg-6 col-xs-12 p-0'>
                        <div class='my-login-image' ></div>
                    </div>
                    <div class='col-md-12 col-sm-6 col-lg-6 col-xs-12 my-login-side-container'>
                        <div class='my-connexion'>Connexion</div>
                    <div class='my-input-explainer' >Username:</div>
                    <div >
                        <input class='my-input' type="text" name='username' placeholder='Entrez votre Username' required>
                    </div>
                    <div class='my-input-explainer' >Mot de pass:</div>
                    <div >
                        <input class='my-input' type="text" name='password' placeholder='Entrez votre mot de pass' required>
                    </div
                    <div>
                    <button type="submit" class="my-btn" >
                        Connexion    
                    </button>
                        <div>
                        </div>
                        <center>
        
        
        HTML;


     if(isset($_GET['er'])){
         $html .= "<p class='font-size: 2rem;' >Mot de pass et incorect</p>";
     }






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
        
    }else if(isset($_POST['username']) && isset($_POST['password'])){
         $username = $_POST['username'];
         $password = $_POST['password'];
        
         if(!empty($username) && !empty($password)){
             $localhost = 'localhost';
             $user = 'root';
             $pass = '';
             $database = 'BOOXCHANGE';
             $connection = mysqli_connect($localhost,$user, $pass);

             if($connection){
                 $db = mysqli_select_db($connection, $database);
                 
                 if($db){
                    $password = md5($password);
                    $query = "SELECT email, password FROM Accounts WHERE email='$username' AND password='$password' LIMIT 1;";
                    $result = mysqli_query($connection, $query);
                    $row = mysqli_fetch_array($result);
                    try{
                        if($row[0] == $username && $row[1] == $password){
                            $query = "SELECT * FROM Accounts where email ='$username' and password= '$password' and Enabled = 1 LIMIT 1";
                            $result = mysqli_query($connection,$query);
                            $num_rows = mysqli_num_rows($result);
                            if($num_rows == 1){
                                if(isset($_POST['rememberme']) && !empty($_POST['rememberme'])){
                                $time = 60 * 60 * 24 * 7;
                                setcookie('username', "$username", time() + $time);
                                setcookie('password', "$password", time() + $time);
                                }
                                $_SESSION['username'] = $username;
                                $_SESSION['password'] = $password;
                                header('Location: home.php');
                            }else{
                                echo "verifier votre compt par email";
                            }
                        }else{
                            header('Location: login.php?er=1');
                        }
                    }catch(Exception $ex){
                        header('location: login.php');
                    }
                 }
             }else{
                 $exception .= "<p>Problems Connecting to the server :/</p>";
             }
         }else{
             $exception .= "l'e-mail et le mot de passe sont requis"; 
             header('location: login.php');
         }

     }else{

                $html .= <<<HTML
         
                       </center>
                    <div class='my-checkbox'>               
                        <input type="checkbox" name='rememberme' value='true' id='chbox'><label for='chbox' >&nbsp;souviens-toi de moi</label>
                    </div>
                    <div class='my-input-link'>               
                        <a class='my-link' href="resetpassword.php" >j'ai oublié le mot de pass.</a>
                    </div>
                    <div class='my-input-link mt-5 mb-3'>
                        <a class='my-link' href="reg.php" ><center>Vous n'êtes pas membre?</center></a>
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