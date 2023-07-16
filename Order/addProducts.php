<?php
    include("../config/conexion.php");

    $idOrder = $_POST["idOrder"];
    $category = $_POST["category"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $orderDetail = $_POST["descripcion"];
    $totalPrice = $_POST["totalPrice"];

    $sql = "INSERT INTO products (IdOrder, IdCategory, ProductName, Price, OrderDetails, TotalPrice) VALUES ('$category', '$name', '$price', '$orderDetail', '$totalPrice')";
    $resultado = mysqli_query($conexion, $sql);
    // $resultado = $conexion->query($sql); // Otra forma de hacerlo 
     
    if ($resultado) {
        header("Location: ../index.php");
    } else {
        echo "Datos no insertados";
    }
?>