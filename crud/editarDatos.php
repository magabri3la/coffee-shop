<?php
    include("../config/conexion.php");

    $Id = $_POST["Id"];
    $Categorias = $_POST["categorias"];
    $Marcas = $_POST["marcas"];
    $Precio = $_POST["precio"];
    $Descripcion = $_POST["descripcion"];
    $Nombre = $_POST["nombre"];

    $sql = "UPDATE productos SET categoriaId = '".$Categorias."', marcaId = '".$Marcas."', precio = '".$Precio."', descripcionProducto = '".$Descripcion."', nombre = '".$Nombre."' WHERE IdProducto = '".$Id."'";

    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header("Location: ../index.php");
    } else {
        echo "Datos no actualizados";
    }
?>