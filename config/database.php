<?php

function connectBD(){
    
    $server = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "bt_htw"; 

    $conn = mysqli_connect($server, $user, $pass, $dbname);

    if(!$conn){
        die("Connect failed.".mysqli_connect_error());
    }

    mysqli_set_charset($conn, "utf8");

    return $conn;
}

?>