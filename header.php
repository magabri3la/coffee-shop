<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/stylesCart.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="styles/styleshome.css">
    
    <title>Jitsi Coffee</title>
    <!--FONTAWESOME CODE-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <!--ANIMATE CSS-->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <title>Coffee-Shop</title>
</head>

<body>

    <header class="header" class="espaciado">
        <nav class="nav container"> 
            <div class="nav__logo">
                <h2 class="nav__title">Jisti Coffe</h2>
            </div>
            <ul class="nav__link nav__link--menu">
                <li class="nav__items">
                    <a href="home.php" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="nosotros.php" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="contacto.php" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="tienda.php" class="nav__links">Tienda</a>
                </li>
                <li class="nav__items">
                    <a href="ver_carrito.php" class="nav__links">
                        Ver carrito <?php
                                        include_once "funciones.php";
                                        $conteo = count(obtenerIdsDeProductosEnCarrito());
                                        if ($conteo > 0) {
                                            printf("(%d)", $conteo);
                                        }
                                        ?>&nbsp;<i class="fa fa-shopping-cart"></i>
                    </a>
                </li>

                <img src="./img/close.svg" alt="" class="nav__close">
            </ul>
            <div class="nav__menu">
                <img src="./img/menu.svg" alt="">
            </div>
        </nav>  
    </header>