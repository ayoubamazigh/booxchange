<!DOCTYPE HTML>

<html lang='fr'>
    <head>
        <title>Booxchange.com</title>
        <meta charset='utf-8' />
    </head>
    
        <link rel='icon' href='assest/img/favicon.png'>
        <link href="assest/css/bootstrap.css" rel="stylesheet" >
        <link href='assest/css/index.css' rel='stylesheet'>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
        <style >
            *{
                padding: 0px;
                margin: 0px;
            }
            body{
                background-color: #c8e4fb;
                font-family: 'open sans' , sans-serif;
                color: black;
                min-width: 350px;
            }
            a{
                font-family: 'ope n sans', sans-serif;
                font-weight: 600;
                text-decoration: none;
                color: black;
                padding: 0px 0.4rem;
            }
            a:hover{
                color: blue;
            }
            .brandlogo{
                font-weight: 800;
            }
            .sep{
                background-color: black;
                height: 2rem;
                width: .15rem;
                border-radius: 20px;
            }
            .searchbtn{
                margin: 0rem 1rem;
                background-color: aqua;
                color: black;
                font-family: sans-serif;
                font-weight: 400;
            }
            .searchbtn:hover{
                background-color: darkblue;
                color: white;
            }
            .textsearch{
                background-color: lightgre;
                color: black;
                font-family: sans-serif;
                
            }
            .textsearch:hover{
                border: 1px solid blue;
            }
        </style>
    <body>
        
        <nav class='navbar navbar-expand-md navbar-light bg-light p-2'>
            <a href='index.php' class='navbar-brand p-2 brandlogo'>BOOXCHANGE</a>
            
            <button class='navbar-toggler' data-toggle='collapse' data-target='#navbarm'>
                <span class='navbar-toggler-icon'></span>
            </button>
            <div class='collapse navbar-collapse'>
            <div class='sep'></div>
            </div>
            <div class='collapse navbar-collapse' id='navbarm'>
                
                <ul class='navbar-nav mx-auto'>
                    <li class='nav-items p-1'>
                        <a href='#' >Accuile</a>
                    </li>
                    <li class='nav-items p-1'>
                        <a href='#' >Services</a>
                    </li>
                    <li class='nav-items p-1'>
                        <a href='#' >About us</a>
                    </li>
                    <li class='nav-items p-1'>
                        <a href='#' >terms</a>
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
                    <input type='search' class='form-control textsearch' placeholder='Book name'>
                    <button class="btn btn-dark searchbtn">Search</button>
                </form>
            </div>
            
        </nav>
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </body>
</html>