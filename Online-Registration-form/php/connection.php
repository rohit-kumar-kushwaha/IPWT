<?php
    session_start();
?>

<?php

    $server = 'localhost';
    $username = 'root';
    $password = 'system';
    $database = 'demo';

    $con = mysqli_connect($server,$username,$password,$database);

    if($con){
        
    }
    else{
        echo "No connection";
    }
$a = "p";

?>