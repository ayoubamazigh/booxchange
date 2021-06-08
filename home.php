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
                        <a href='#deletebook' >Delete book</a>
                    </li>
                    <li class='nav-items p-1'>
                        <a  href='#password'  >Insert Un livre</a>
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
                        <option value='nan' >Langue</option>
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
                        <option value='nan' >Ville</option>
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
        
        
        if( isset($_POST['bookname']) || isset($_POST['catigory'])  ||  isset($_POST['language']) || isset($_POST['ville']) ){
            if( !empty($_POST['bookname']) || !empty($_POST['catigory'] || !empty($_POST['language']) ||  !empty($_POST['ville']) )){

                
                $query = "SELECT * FROM BOOK WHERE ";
                $counter = 0;
                
                if (isset($_POST['bookname'])) { 
                    $bookname = $_POST['bookname'];
                    if(!empty($bookname) && $bookname != 'nan' ){
                        $query .= "title = '$bookname' ";
                         $counter = 1;
                    }
                }
                
                if (isset($_POST['catigory'])) { 
                    $catigory = $_POST['catigory'];
                    if(!empty($catigory) && $catigory != 'nan' ){
                        if($counter == 1){
                            $query .= " and "; 
                        }
                        $query .= "catigory = '$catigory' ";
                        $counter = 1;
                    }
                }
                
                if (isset($_POST['language'])) { 
                    $language = $_POST['language'];
                    if(!empty($language) && $language != 'nan'){
                        if($counter == 1){
                            $query .= " and "; 
                        }
                        $query .= "language = '$language' ";
                        $counter = 1;
                    }
                }
        
        
        
        
        
                if (isset($_POST['ville'])) { 
                    $ville = $_POST['ville'];
                    if(!empty($ville) && $ville != 'nan'){
                        if($counter == 1){
                            $query .= " and "; 
                        }
                        $query .= "ville = '$ville' ";
                        $counter = 1;
                    }
                }
        
        }
        }else{
            $query = "SELECT * FROM Book";
        }
                $host = 'localhost';
                $user = 'root';
                $pass = '';
                $database = 'booxchange';

                $connection = mysqli_connect($host, $user, $pass);
                    if($connection){
                            $db = mysqli_select_db($connection, $database);
                        if($db){      
                $result = mysqli_query($connection, $query);

                $html = <<<html
            <div class='container-fluid my-main-container'>
            <div class='row'>
            html;

                while($row = mysqli_fetch_array($result)){
            $html = $html . <<<html
            <div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 my-book'>
            <div class='my-book-inside'>    
            <input class='my-image' type='image' src='{$row[6]}' >
            <div class='my-book-description'>
            <div class='my-title'>{$row[1]}</div>
            <div class='my-discription'>{$row[2]}</div>
            <div class='my-additionall-data'>
            <div class='my-by'>Author: {$row[3]}</div>
            <div class='my-by'>Catigory: {$row[4]}</div>
            <div class='my-by'>Language: {$row[5]}</div>
            <div class='my-by'>Ville: {$row[7]}</div>
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
        
        
        
        
        
        
        
        <div id="password" class="overlay">
                                <form action='#' method="POST" enctype="multipart/form-data">
                                    <div class="container">
                                        <div class="popup">
                                        <a class="close" href="#">&times;</a>
                                            <center class='my-insert-title' >Creation d'un livre</center>
                                        <div class='row'>
                                            <div class='my-description col-lg-2 col-md-2 col-xs-12 ' >
                                                Image: 
                                            </div>
                                            <div class='col-lg-10 col-md-10 col-xs-12 ' >
                                                <input class='my-image-uploader' type="file" name='my-image' >
                                            </div>
                                        </div>
                                        
                                        <div class='row'>
                                            <div class='my-description col-lg-2 col-md-2 col-xs-12 ' >
                                                Titre:
                                            </div>
                                            <div class='col-lg-10 col-md-10 col-xs-12 ' >
                                                <input class="tttt" type='text' name="livre-titre" placeholder='titre du livre' >
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='my-description col-lg-2 col-md-2 col-xs-12 ' >
                                                Description:
                                            </div>
                                            <div class='my-description-input col-lg-10 col-md-10 col-xs-12 ' >
                                                <!--<input class="tttt" type='text' name="livre-description" placeholder='titre du livre' > -->
                                                <textarea class="my-descriptiontttt" name="text"></textarea>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='my-description col-lg-2 col-md-2 col-xs-12 ' >
                                                Author:
                                            </div>
                                            <div class='col-lg-10 col-md-10 col-xs-12 ' >
                                                <input class="tttt" type='text' name="livre-author" placeholder='titre du livre' >
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='my-description col-lg-2 col-md-2 col-xs-12 ' >
                                                Catigory:
                                            </div>
                                            <div class='col-lg-10 col-md-10 col-xs-12 ' >
                                                <select class="tttt" class="text-text" name='livre-catigory'  >
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
                                        </div>
                                        <div class='row'>
                                            <div class='my-description col-lg-2 col-md-2 col-xs-12 ' >
                                                language:
                                            </div>
                                            <div class='col-lg-10 col-md-10 col-xs-12 ' >
                                                <select class="tttt" name='livre-language' >
                                                    <option value='nan' >Langue</option>
                                                    <option value='française' >française</option>
                                                    <option value='Anglais' >Anglais</option>
                                                    <option value='Espagnol' >Espagnol</option>
                                                    <option value='Arabe' >Arabe</option>
                                                    <option value='amazigh' >amazigh</option>
                                                    <option value='Allemand' >Allemand</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class='row'>
                                            <div class='my-description col-lg-2 col-md-2 col-xs-12 ' >
                                                Ville:
                                            </div>
                                            <div class='col-lg-10 col-md-10 col-xs-12 ' >
                                                <select class="text-text" name='book-ville'  >
                                                    <option value='nan' >Ville</option>
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
                                            <div class='row'>
                                            <div class='my-description col-lg-12 col-md-12 col-xs-12 ' >
                                                <center><input class="btn bg-danger mt-2" type="submit" value="Ajouter"></center>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        <div id="deletebook" class="overlay">
                        <div class="popup">
                            <h5>Supprimer Livre</h5>
                                <a class="close" href="#">&times;</a>
                            <div class="content">
                                <form action='#' method='POST'>
                                <table>
                                    <tr>
                                        <td ><div class="my-search-name" >Livre:</div></td><td>
                                            <select class="" name='select-delete-book'>
                                                <?php
                                                    $host = 'localhost';
                                                    $user = 'root';
                                                    $pass = '';
                                                    $database = 'booxchange';

                                                    $connection = mysqli_connect($host, $user, $pass);
                                                        if($connection){
                                                                $db = mysqli_select_db($connection, $database);
                                                            if($db){  
                                                                $query = "SELECT id, titre FROM BOOK";
                                                                $result = mysqli_query($connection, $query);

                                                                while($row = mysqli_fetch_array($result)){
                                                                    echo "<option  value='{ $row[0] }' >{ $row[1] }</option>";
                                                
                                                                }
                                                            }
                                                        }
                                                ?>
                                        
                                        
                                        
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>    
                                        <td colspan='2'><input class='valider2' type='submit' value='Valider' ></td>
                                    </tr>                                
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <?php 
        
        if(isset($_FILES['my-image']) && isset($_POST['livre-titre']) && isset($_POST['text']) && isset($_POST['livre-author']) && isset($_POST['livre-catigory']) && isset($_POST['livre-language']) && isset($_POST['book-ville']) ){
            $titrelivre = $_POST['livre-titre'];
            $description = $_POST['text'];
            $livreauthor = $_POST['livre-author'];
            $livrecatigory = $_POST['livre-catigory'];
            $livrelanguage = $_POST['livre-language'];
            $livreville = $_POST['book-ville'];
            $username = $_SESSION['username'];
            
            if(!empty($titrelivre) && !empty($description) && !empty($livreauthor) && !empty($livrecatigory) && !empty($livrelanguage) && !empty($livreville)){
                
                $imgname = $_FILES['my-image']['name'];
                $imgsize = $_FILES['my-image']['size'];
                $imgpath = $_FILES['my-image']['tmp_name'];
                $imgerror = $_FILES['my-image']['error'];
                if($imgerror == 0){
                    if($imgsize > 1000000){
                        echo "image is to big";
                    }else{
                        $imgextention = pathinfo($imgname, PATHINFO_EXTENSION);
                        $imgextention = strtolower($imgextention);
                        $allowed_exs = array('jpg','jpeg','png');
                        if(in_array($imgextention, $allowed_exs)){
                            $newimgname = uniqid("IMG-", true) . "." . $imgextention;
                            $imguploadpath = "Uploaded/" . $newimgname;
                            move_uploaded_file($imgpath, $imguploadpath);
                            //echo $titrelivre . $description . $livreauthor . $livrecatigory . $livrelanguage . $livreville;
                            $localhost = 'localhost';
                            $user = 'root';
                            $pass = '';
                            $database = 'BOOXCHANGE';
                            $connection = mysqli_connect($localhost,$user, $pass);

                            if($connection){
                                $db = mysqli_select_db($connection, $database);
                                if($db){
                                    $query = "INSERT INTO BOOK (titre, description,author, catigory, language, picture, ville, code_user) VALUES ('$titrelivre','$description','$livreauthor','$livrecatigory','$livrelanguage','$imguploadpath','$livreville','$username')";
                                    $inserted = mysqli_query($connection, $query);
                                        if($inserted){
                                            header('Location: home.php');
                                        }else{
                                            echo 'errour';
                                        }
                                }
                            }    
                        }else{
                            echo "Must be of type jpg, jpeg, png";
                        }
                    }
                        }else{
                            echo "Unknown error: " . $imgerror;
                            header('Location: home.php');
                        }

                    }
                }        
        
        ?>
        
        <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>
        
        