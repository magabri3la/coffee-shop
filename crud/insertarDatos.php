<?php
    include("../config/conexion.php");

    $categoria = $_POST["CategoriaP"];
    $marca = $_POST["MarcaP"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $nombre = $_POST["nombre"];

    $sql = "INSERT INTO productos (CategoriaId, MarcaId, Precio, DescripcionProducto, Nombre) VALUES ('$categoria', '$marca', '$precio', '$descripcion', '$nombre')";
    $resultado = mysqli_query($conexion, $sql);
    // $resultado = $conexion->query($sql); // Otra forma de hacerlo 
     
    if ($resultado) {
        header("Location: ../index.php");
    } else {
        echo "Datos no insertados";
    }
?>