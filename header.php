<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/stylesCart.css">
    <!-- <link href="styles/stylesBoos.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

    <title>Coffee-Shop</title>
</head>

<body>

    <header class="header" class="espaciado">
        <div class="contenedor">
            <nav class="nav">
                <a href="index.html" class="logo">

                </a>
                <div class="bars_menu" aria-label="Abrir menú">
                    <span class="line1_bars-menu"></span>
                    <span class="line2_bars-menu"></span>
                    <span class="line3_bars-menu"></span>
                </div>
                <ul class="nav-menu">
                    <li class="nav-menu-item">
                        <a href="index.php" class="nav-menu-link nav-link">Inicio</a>
                    </li>
                    <li class="nav-menu-item">
                        <a href="tienda.php" class="nav-menu-link nav-link">Tienda</a>
                    </li>

                    <li class="nav-menu-item">
                        <a href="ver_carrito.php" class="nav-menu-link nav-link">
                            Ver carrito <?php
                                            include_once "funciones.php";
                                            $conteo = count(obtenerIdsDeProductosEnCarrito());
                                            if ($conteo > 0) {
                                                printf("(%d)", $conteo);
                                            }
                                            ?>&nbsp;<i class="fa fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
