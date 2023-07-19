<?php
    include("../config/conexion.php");

    $idOrder = $_POST["idOrder"];
    $totalPrice = $_POST["totalPrice"];

    $sql = "INSERT INTO products (IdOrder, TotalPrice) VALUES ('$idOrder','$totalPrice')";
    $resultado = mysqli_query($conexion, $sql);
    // $resultado = $conexion->query($sql); // Otra forma de hacerlo 
     
    if ($resultado) {
        header("Location: ../index.php");
    } else {
        echo "Datos no insertados";
    }
?>