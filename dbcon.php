<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "data";


    $conn = mysqli_connect($host,$username,$password,$database);


    if($conn)
    {
       
    }
    else
    {
        echo "connection failed" .mysqli_connect_error();
    }

?>
