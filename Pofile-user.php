<?PHP

    error_reporting(0);
    session_start();
    
    if(isset($_GET['email'])){
        $localhost = 'localhost';
        $user = 'root';
        $pass = '';
        $database = 'BOOXCHANGE';
        $connection = mysqli_connect($localhost,$user, $pass);
        $username = $_GET['email'];
            if($connection){
                $db = mysqli_select_db($connection, $database);
                if($db){
                    $query = "SELECT * FROM user WHERE email='$username'";
                    $result = mysqli_query($connection, $query);
                    if($result){
                    $row = mysqli_fetch_array($result);
                    }else{
                    header('location: home.php');
                    }   
                }
            }
    }else{
        header('Location: home.php');
    }
?>

<!DOCTYPE HTML>

    <html lang='fr'>
        <head>
            <title>Booxchange.com</title>
            <meta charset='utf-8' />
        </head>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel='icon' href='assest/img/favicon.png'>
            <link href="assest/css/bootstrap.css" rel="stylesheet" >
            <link href='assest/css/index-style.css' rel='stylesheet'>
            <link href='assest/css/profile.css' rel='stylesheet'>
            <link rel="preconnect" href="https://fonts.gstatic.com">
            <link href="https://fonts.googleapis.com/css2?  family=Fredoka+One&family=Open+Sans:ital,wght@0,300;0,700;0,800;1,300&family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">        
        <body>
            
            <nav class='navbar navbar-expand-lg navbar-light bg-light p-2'>
                <a href='index.php' class='navbar-brand p-2 brandlogo'>BOOXCHANGE</a>
            
                <button class='navbar-toggler' data-toggle='collapse' data-target='#navbarm'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <div class='collapse navbar-collapse'>
                    <div class='sep'></div>
                </div>
            <div class='collapse navbar-collapse' id='navbarm'>
    
                <ul class='navbar-nav mx-auto' style="margin-left: 0;">
                    <li class='nav-items p-1'>
                        <a href='index.php'  >Accuile</a>
                    </li>
                    <li class='nav-items p-1'>
                        <a href='home.php' >page principale</a>
                    </li>
                    <!--
                    <li class='nav-items dropdown'>
                        <a class='nav-link dropdown-toggle' href='#' id='dropdownnav' data-toggle='dropdown'>Links</a>
                    <div class='dropdown-menu ' aria-labelledby='dropdownnav'>
                        <ul>
                            <li><a class='dropdowm-item' href=''>Facebook</a></li>
                            <li><a class='dropdowm-item' href=''>Instagram</a></li>
                            <li><a class='dropdowm-item' href=''>Twiter</a></li>
                            <li><a class='dropdowm-item' href=''>Amazon Books</a></li>
                        </ul>
                        </div>
                    </li>  
                    -->
                </ul>
                <form class='form-inline d-flex'>
                    <a href="profile.php" > <image class='mini-profile-image' type="image" src='<?php if($row[5] == "f"){ echo "assest/img/OIP.jpg"; }else{ echo "assest/img/male.png"; } ?>' ></image></a>
                    <a href="clear.php" ><div class="logout" >déconnexion</div></a>
                </form>
            </div> 
        </nav>
            
            
        <div class='bodysep'></div>
                

        <div class="container">
            <div class="main-body"> 
                <div class="row gutters-sm">
                    <div class="col-md-12 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="<?php if($row[5] == "f"){ echo "assest/img/OIP.jpg"; }else if($row[5] == 'm'){ echo "assest/img/male.png"; } ?>  " alt="profile picture" class="rounded-circle main-profile-picture">
                                    <div class="mt-0">
                                        <h4 class="main-name"><?php echo  "{$row[0]} {$row[1]}"; ?></h4>
                                        <p class="text-secondary mb-1">Booxchange Site Web</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">E-mail:</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            <?php echo  "{$row[3]}"; ?>
                                        </div>
                                        <div class="col-sm-2 text-secondary" ></div>
                                    </div>
                                    
                                    <hr>
                                         
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Numéro de téléphone:</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            <?php echo  "{$row[4]}"; ?>
                                        </div>
                                        <div class="col-sm-2 text-secondary" >
                                        </div>
                                    </div>
                                    
                                    <hr>
                 
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <h6 class="mb-0">Genre</h6>
                                        </div>
                                        <div class="col-sm-7 text-secondary">
                                            <?php
                                            
                                                if($row[6] == "f"){
                                                    echo "Female";
                                                }else{
                                                    echo "Male";
                                                }   
                                            ?>
                                        </div>
                                        <div class="col-sm-2 text-secondary" ></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="col-md-12 text-center bg-danger text-dark copyrightbanner">
            Copyright BOOXCHANGE © 2021. Tous les droits sont réservés.
        </div>
        
            
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>