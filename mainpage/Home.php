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
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>heloojdf</title>
<link href="style.css" rel="stylesheet">
<link href='bootstrap.css' rel='stylesheet'>
</head> 

<body>

<div class='container'>
<div class='row'>
html;

    while($row = mysqli_fetch_array($result)){
$html = $html . <<<html
<div class='col-lg-3 col-md-4 col-sm-6 col-xs-12 my-book'>
<div class='my-image'>
</div>
<div class='my-book-description'>
<div class='my-title'>{$row[0]}</div>
<div class='my-discription'>{$row[1]}</div>
<div class='my-additionall-data'>
<div class='my-by'>Author: {$row[2]}</div>
<div class='my-by'>Catigory: {$row[3]}</div>
<div class='my-by'>Language: {$row[4]}</div>
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