<?php
    $host = "localhost:3307";
    $user = "root";
    $pass = "";
    $db = "coffeeshop";

    $conexion = new mysqli($host, $user, $pass, $db);
    
    if($conexion->connect_errno){
        echo "Error al conectarse con la base de datos: ".$conexion->connect_error;
    }
?>