<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/stylesContacto.css">
    <link rel="stylesheet" href="styles/styleshome.css">
    
    <title>Jitsi Coffee - Contacto</title>
    <!--FONTAWESOME CODE-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <!--ANIMATE CSS-->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body>

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
    <div class="content">

        <h1 class="animate__backInUp logo">Contáctenos</h1>
        <div class="contact-wrapper">
            <div class="contact-form">
                <h3>Contáctanos</h3>
                <form action="">
                    <p>
                        <label for="">Nombre Completo</label>
                        <input type="text" name="fullname">
                    </p>
                    <p>
                        <label for="">Correo Electrónico</label>
                        <input type="email" name="email">
                    </p>
                    <p>
                        <label for="">Celular</label>
                        <input type="tel" id="celular" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                    </p>
                    <p>
                        <label for="">Dirección</label>
                        <input type="text" name="direccion" id="">
                    </p>
                    <p class="block">
                        <button type="submit">Enviar</button>
                    </p>

                </form>
            </div>
            <div class="contact-info">
                <h4>Más información</h4>
                <ul>
                    <li>Dirección: Av. La Molina</li>
                    <li>Tel: 987 654 321</li>
                    <li>Correo: jisti.coffe@gmail.com</li>
                </ul>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus sequi, voluptas, quae quibusdam
                    modi molestias fugiat culpa, nisi necessitatibus impedit voluptatum debitis magnam maiores.</p>
                    <p>jisticoffe.com</p>
            </div>
        </div>

    </div>
    
</body>


</html>