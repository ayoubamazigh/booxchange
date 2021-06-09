<?php

    if(isset($_GET['vkey'])){
        $vkey = $_GET['vkey'];
        if(!empty($vkey)){
          
             $localhost = 'localhost';
             $user = 'root';
             $pass = '';
             $database = 'BOOXCHANGE';
             $connection = mysqli_connect($localhost,$user, $pass);

             if($connection){
                 $db = mysqli_select_db($connection, $database);
                 if($db){
                    $query = "UPDATE Accounts set Enabled = 1 WHERE vkey = '$vkey'";
                    $updated = mysqli_query($connection, $query);
                    if($updated){
                        header('Location: ../login.php');
                    }else{
                        echo "<center style='margin-top:2rem;font-size: 3rem;' ><p>Something went wrong</p></center>";
                    }
        }
    }
            
        }
    }

?>