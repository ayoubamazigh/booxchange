<?php
    session_start();
    if(isset($_SESSION['username']) && isset($_SESSION['password'])){
         
    }else{
        header('location:login.php');
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
        <link href="assest/css/profile.css" rel="stylesheet" >
        <link href="assest/css/bootstrap.css" rel="stylesheet" >
        <link href='assest/css/index-style.css' rel='stylesheet'>
        <link href='assest/css/profile.css' rel='stylesheet'>
        <link href='assest/css/home-style.css' rel='stylesheet'>
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
                        <a href='#'  >Accuile</a>
                    </li>
                    <li class='nav-items p-1'>
                        <a href='#' >Services</a>
                    </li>
                    <li class='nav-items p-1'>
                        <a href='#' >About</a>
                    </li>
                    <li class='nav-items p-1'>
                        <a  href='#'  >terms</a>
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
                    <input class='mini-profile-image' type="image" src='Uploaded/1.jpg' >
                     <a href="clear.php" ><input type="image" class='logout' src="assest/img/logout.png" ></a>
                </form>
            </div>
            
        </nav>
        <div class='bodysep'></div>
           
        <form action="#" method="POST">
        <div class='my-main-search container mt-3'>
            <div class=' row'>
                <div class="col-md-3">
                    <div class='my-search-name'>Nom:</div><input class="text-text" type="text" name='bookname' placeholder='Nom de livre' >
                </div>
                
                <div class="col-md-3">
                    <div class='my-search-name'>catigory:</div>
                    <select class="text-text" class="text-text" name='catigory'  >
                        <option value="nan" >Catigory</option>
                        <option value="art" >Art</option>
                        <option value="bandes dessinée" >Bandes dessinée</option>
                        <option value="Cuisine" >Cuisine</option>
                        <option value="Développment" >Développment</option>
                        <option value="Dictionnaires" >Dictionnaires</option>
                        <option value="Droit & économie" >Droit et économie</option>
                        <option value="Histoire" >Histoire</option>
                        <option value="Humour" >Humour</option>
                        <option value="Policier" >Policier</option>
                        <option value="Religion" >Religion</option>
                        <option value="Sciences" >Sciences</option>
                        <option value="Scolaire" >Scolaire</option>
                        <option value="Fantasy" >Fantasy</option>
                        <option value="Sport" >Sport</option>
                        <option value="Théàtre" >Théàtre</option>
                        <option value="Tourisme et voyage" >Tourisme et voyage</option>
                        <option value="Littérature" >Littérature</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class='my-search-name'>Langue:</div>
                    <select class="text-text" name='language' >
                        <option value='Langue' >Langue</option>
                        <option value='française' >française</option>
                        <option value='Anglais' >Anglais</option>
                        <option value='Espagnol' >Espagnol</option>
                        <option value='Arabe' >Arabe</option>
                        <option value='amazigh' >amazigh</option>
                        <option value='Allemand' >Allemand</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <div class='my-search-name'>Ville:</div>
                    <select class="text-text" name='ville'  >
                        <option value='Ville' >Ville</option>
                        <option value='Agadir' >Agadir</option>
                        <option value='Beni Mellal' >Beni Mellal</option>
                        <option value='Berkane' >Berkane</option>
                        <option value='Casablanca' >Casablanca</option>
                        <option value='Dakhla' >Dakhla</option>
                        <option value='El Jadida' >El Jadida</option>
                        <option value='Fez' >Fez</option>
                        <option value='Guelmim' >Guelmim</option>
                        <option value='Ifrane' >Ifrane</option>
                        <option value='Layoune' >Layoune</option>
                        <option value='Marrakesh' >Marrakesh</option>
                        <option value='Meknes' >Meknes</option>
                        <option value='Mohammedia' >Mohammedia</option>
                        <option value='Ouarzazate' >Ouarzazate</option>
                        <option value='Oujda' >Oujda</option>
                        <option value='Safi' >Safi</option>
                        <option value='Samara' >Samara</option>
                        <option value='Salè' >Salè</option>
                        <option value='Tangier' >Tangier</option>
                        <option value='Tan-Tan' >Tan-Tan</option>
                        <option value='Tetouan' >Tetouan</option>
                        <option value='Tiznit' >Tiznit</option>
                        <option value='Rabat' >Rabat</option>
                        
                    </select>
                </div>
            </div>
            <div class="row">
                <center><input class=" btn-btn col-4 btn bg-info mt-2" type="submit" value="Rechercher"></center>
            </div>
        </div>
        
        
        
        
        </form>
        
                    <?php

                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $database = 'booxchange';

                $connection = mysqli_connect($host, $user, $pass);
                    if($connection){
                $db = mysqli_select_db($connection, $database);
                        if($db){
                $query = "select * from Book";

                $result = mysqli_query($connection, $query);

                $html = <<<html
            <div class='container-fluid my-main-container'>
            <div class='row'>
            html;

                while($row = mysqli_fetch_array($result)){
            $html = $html . <<<html
            <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 my-book'>
            <div class='my-book-inside'>    
            <input class='my-image' type='image' src='{$row[5]}' >
            <div class='my-book-description'>
            <div class='my-title'>{$row[0]}</div>
            <div class='my-discription'>{$row[1]}</div>
            <div class='my-additionall-data'>
            <div class='my-by'>Author: {$row[2]}</div>
            <div class='my-by'>Catigory: {$row[3]}</div>
            <div class='my-by'>Language: {$row[4]}</div>
            <div class='my-by'>Ville: {$row[6]}</div>
            </div>
            </div>
            </div>
            </div>
            html;
            }

             $html = $html . "</div></div></body></html>";

                echo $html;
                    }
                    }
            ?>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </body>
</html>
        
        