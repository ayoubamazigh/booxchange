<html>
    <head>
        <title>Mot de pass Oblier</title>
    </head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel='icon' href='assest/img/favicon.png'>
    <link href="assest/css/bootstrap.css" rel="stylesheet" >
    <link href="assest/css/resetpassword.css" rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?  family=Fredoka+One&family=Open+Sans:ital,wght@0,300;0,700;0,800;1,300&family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
    
    <body>
        <form action="#" method="post">
        <center><div class='container-main'>
            <div class='container' >
                <div class="row">
                    <div class=" col-md-4 input-ex">tapez votre e-mail:</div>
                    <div class='col-md-8'>    
                        <input class="my-input" type="email" name='email' placeholder='tapez votre e-mail' required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 input-ex" >Clé de vérification:</div>
                    <div class='col-md-8'>
                        <input class="my-input" type="text" name='vkey' placeholder='tapez votre Clé de vérification'required >
                    </div>
                </div>
                <div class="row" >
                    <div class="col-md-4 input-ex" >nouveau mot de passe:</div>
                    <div class='col-md-8'>
                        <input class="my-input" type='text' name='password' placeholder="tapez votre nouveau mot de passe" required >
                    </div>
                </div>
            </div>
            
      
<?php
    error_reporting(0);

    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['vkey']) ){
         $email = $_POST['email'];
         $password = $_POST['password'];
         $vkey = $_POST['vkey'];
        
         if(!empty($email) && !empty($password) && !empty($vkey) ){
             $localhost = 'localhost';
             $user = 'root';
             $pass = '';
             $database = 'BOOXCHANGE';
             $connection = mysqli_connect($localhost,$user, $pass);

             if($connection){
                 $db = mysqli_select_db($connection, $database);
                 
                 if($db){
                    $password = md5($password);
                    $query = "UPDATE Accounts Set password ='$password' WHERE email='$email' AND vkey ='$vkey' ";
                    $result = mysqli_query($connection, $query);
                     
                    if($result){
                        echo "<center style='color:red; font-size: 1.2rem;'>if the exists the password will be reset :)</center>";
                    }
                 }else{
                 $exception .= "<p>Problems Connecting to the server :/</p>";
                 }
            }
        }
    }

?>
            <div  class='btn my-btn'>
                <input class="my-btn-btn" type="submit" value="Réinitialiser mot de passe" >
            </div>
            </div>
            </center>
        </form>
    </body>
</html>