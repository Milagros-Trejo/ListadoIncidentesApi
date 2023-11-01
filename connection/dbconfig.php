<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "tp_anual";

    $connection = mysqli_connect($host, $user, $pass, $dbname);
    if(!$connection){
        die("Error en la conexion a la DB: " . mysqli_connect_error());
    } else {
        echo "yey";
    }
?>