<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jitsi Coffee</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/styleshome.css">

    <!-- Link de Animate -->
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <header class="hero">
        <nav class="nav container">
            <div class="nav__logo">
                <h2 class="nav__title">Jisti Coffee</h2>
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
                        Ver carrito
                        <?php
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
        <section class="hero__container container wow animate__animated animate__backInLeft">
            <h1 class="hero__title">La mejor cafetería de la Ciudad</h1>
            <p class="pero__paragraph">Adéntrate a ésta gran aventura donde podrás saborear nuestros deliciosos potajes,
                <br>
                atención de primera y una excelente banda sonora
            </p>
            <a href="contacto.php" class="cta">Reserva</a>
        </section>
    </header>

    <main>
        <section class="testimony">
            <div class="testimony__container container">
                <img src="./img/leftarrow.svg" class="testimony__arrow" id="before" alt="">
                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Hamburguesas,<br> <span class="testimony__course">
                                Nuestros tipos:</span></h2>
                        <p class="testimony__review"> <b>Hamburguesa clásica:</b> Como se describió anteriormente, es la
                            versión básica con carne, lechuga, tomate, queso, cebolla y salsas.<br>

                            <b>Hamburguesa con queso:</b> Similar a la hamburguesa clásica, pero con un enfoque especial
                            en el queso, que se derrite sobre la carne.<br>

                            <b>Hamburguesa de pollo:</b> En lugar de carne de res, se utiliza carne de pollo, que puede
                            ser empanizada o a la parrilla.
                        </p>

                        <a href="tienda.php" class="cta btn1">Ver Tienda</a>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./img/burguer2.jpg" alt="" class="testimony__img">
                    </figure>
                </section>
                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Caffé,<br> <span class="testimony__course">
                                Nuestros tipos:</span></h2>
                        <p class="testimony__review">
                            <b> Café negro:</b> Es el café regular sin ningún agregado o mezcla. Puede ser preparado en
                            diferentes métodos, como la cafetera de goteo, la prensa francesa o la cafetera italiana
                            (moka).<br>

                            <b>Café Espresso:</b> El espresso se utiliza como base para muchas otras bebidas de café,
                            como el cappuccino y el latte.<br>

                            <b> Café con leche:</b> Es una combinación de café y leche caliente. La proporción varía
                            según las preferencias individuales, pero generalmente se sirve en partes iguales.<br>

                            <b>Café descafeinado:</b> Es café al que se le ha eliminado la mayor parte de la cafeína. Se
                            puede encontrar en varias formas, como granos enteros, molido o instantáneo.
                        </p>
                        <a href="tienda.php" class="cta btn1">Ver Tienda</a>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./img/capuccino1.jpg" alt="" class="testimony__img">
                    </figure>
                </section>
                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Postres,<br> <span class="testimony__course">
                                Nuestros tipos:</span></h2>
                        <p class="testimony__review">
                            <b> Torta de chocolate: </b>Un clásico favorito que se elabora con capas de bizcocho de
                            chocolate y relleno de crema de chocolate o ganache.<br>

                            <b>Torta Red Velvet: </b> Un bizcocho suave y húmedo de color rojo intenso, con un ligero
                            sabor a cacao y una textura aterciopelada.<br>

                            <b> Torta de queso: </b> Un postre delicioso y cremoso hecho con queso crema. Puede ser un
                            cheesecake clásico con base de galleta o una torta de queso japonesa con una textura más
                            esponjosa.<br>

                            <b>Torta de tres leches: </b> Una torta empapada en una mezcla de tres tipos de leche: leche
                            condensada, leche evaporada y crema de leche.
                        </p>

                        </p>
                        <a href="tienda.php" class="cta btn1">Ver Tienda</a>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./img/postres1.jpg" alt="" class="testimony__img">
                    </figure>
                </section>
                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Cocteles,<br> <span class="testimony__course">
                                Nuestros tipos:</span></h2>
                        <p class="testimony__review">
                            <b> Mojito:</b>Originario de Cuba, el Mojito es un cóctel refrescante y delicioso. Está
                            hecho con ron blanco, azúcar, jugo de lima, hojas de menta fresca y soda. Es perfecto para
                            los días calurosos de verano.<br>

                            <b>Margarita: </b> Un clásico mexicano, la Margarita es un cóctel a base de tequila, jugo de
                            lima y triple sec. <br>

                            <b>Piña Colada: </b> Este cóctel tropical evoca imágenes de playas paradisíacas. La Piña
                            Colada combina ron blanco, jugo de piña y crema de coco. <br>

                            <b>Pisco Sour: </b> El Pisco Sour es el cóctel insignia de Perú. Se prepara con Pisco, un
                            aguardiente de uvas, jugo de limón, jarabe de goma, clara de huevo y unas gotas de amargo de
                            angostura.
                        </p>
                        </p>
                        <a href="tienda.php" class="cta btn1 ">Ver Tienda</a>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./img/coctel1.jpg" alt="" class="testimony__img">
                    </figure>
                </section>
                <img src="./img/rightarrow.svg" class="testimony__arrow" id="next" alt="">
            </div>
        </section>

        <section class="knowledge wow animate__animated animate__backInRight">
            <div class="knowledge__container container">
                <figure class="knowledge__picture">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/MBY1k9MwVIc"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </figure>
                <div class="knowledge__texts ">
                    <h2 class="subtitle">Aprende a preparar un CAPPUCCINO</h2>
                    <p class="knowledge__paragraph"><b>Dato Curioso:</b> El cappuccino es una bebida comúnmente
                        disfrutada en el
                        desayuno o por la mañana en Italia. Tradicionalmente, se cree que no se debe tomar después de
                        las 11
                        a.m., ya que la leche se considera pesada para el estómago. Sin embargo, en muchas otras partes
                        del
                        mundo, el cappuccino se consume en cualquier momento del día.</p>

                </div>


            </div>
        </section>


        <section class="questions container2 wow animate__animated animate__backInUp">

            <section class="questions__offer">
                <h2 class="subtitle">¿Estas listo para vivir la experiencia de Jitsi Coffe?</h2>
                <a href="tienda.php" class="cta">Ir a Tienda</a>
            </section>
        </section>
    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Jitsi Coffe</h2>
                <ul class="nav__link nav__link--footer">
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
                </ul>
            </nav>
            <form class="footer__form" action="https://formspree.io/f/mrgvgkpp" method="POST">
                <h2 class="footer__newsletter">Contáctanos</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email" class="footer__input" name="_replyto">
                    <input type="submit" placeholder="Registrate" class="footer__submit" type="submit">
                </div>
            </form>
        </section>
        <section class="footer__copy container">
            <h3 class="footer__copyright">Derechos reservados &copy; Jitsi Coffe </h3>
        </section>
    </footer>
    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>