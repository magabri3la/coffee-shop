<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso CSS</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/stylesnosotros.css">
    <!--AMIMATE CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <header class="hero">
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
        <section class="hero__container container">
            <h1 class="hero__title">¿Quienes somos?</h1>
            <p class="pero__paragraph">En nuestra sección de preguntas frecuentes podrás encontrar mayor información
                sobre nosotros.</p>
            <a href="#pfrecuentes" class="cta">Ir a Preguntas Frecuentes</a>
        </section>
    </header>

    <main>
        <section class="container about">
             <div class="about__main">
                <article class="about__icons">
                    <img src="./img/shapes.svg" class="about__icon">
                    <h3 class="about__title">Misión</h3>
                    <p class="about__paragraph">Nuestra misión es ofrecer una experiencia única en café, brindando productos de alta calidad y un servicio excepcional, mientras creamos un ambiente acogedor donde las personas puedan conectarse y disfrutar.</p>
                </article>
                <article class="about__icons">
                    <img src="./img/eye-3-svgrepo-com.svg" class="about__icon">
                    <h3 class="about__title">Visión</h3>   
                    <p class="about__paragraph">Ser reconocidos como la cafetería de referencia en nuestra comunidad, destacando por nuestra excelencia en café, servicio al cliente y compromiso con la sostenibilidad, también deslumbrarlos con nuestros deliciosos potajes.</p>
                </article>
                <article class="about__icons">
                    <img src="./img/powerbi-svgrepo-com.svg" alt="" class="about__icon">
                    <h3 class="about__title">Objetivos</h3>
                    <p class="about__paragraph">
                        Nuestros objetivos son ofrecer productos de café de alta calidad, brindar una experiencia excepcional al cliente, conectar con la comunidad local, fomentar la innovación en sabores y métodos de preparación, y promover la sostenibilidad en nuestras prácticas comerciales.</p>
                </article>

            </div>
        </section>
        


        <section class="questions container" id="pfrecuentes">
            <h2 class="subtitle">Preguntas frecuentes</h2>
            <p class="questions__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod ullam
                temporibus, deleniti ipsa fugit, rem doloremque similique, quasi mollitia ad tempora iste voluptas?</p>
            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es CSS?
                            <span class="questions__arrow">
                                <img src="./img/arrow.svg" alt="" class="questions__img">
                            </span>
                        </h3>
                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae hic
                            voluptates ipsa libero facilis sed numquam cupiditate veniam sunt. Quo, vero! Fugiat ipsa,
                            debitis placeat nihil quasi repellat nulla dolores numquam nam soluta saepe est possimus
                            suscipit modi tenetur? Deserunt eaque officiis quibusdam excepturi? Provident tempore
                            impedit illum? Exercitationem, commodi?</p>
                    </div>
                </article>
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué es CSS GRID?
                            <span class="questions__arrow">
                                <img src="./img/arrow.svg" alt="" class="questions__img">
                            </span>
                        </h3>
                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae hic
                            voluptates ipsa libero facilis sed numquam cupiditate veniam sunt. Quo, vero! Fugiat ipsa,
                            debitis placeat nihil quasi repellat nulla dolores numquam nam soluta saepe est possimus
                            suscipit modi tenetur? Deserunt eaque officiis quibusdam excepturi? Provident tempore
                            impedit illum? Exercitationem, commodi?</p>
                    </div>
                </article>
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Qué aprenderé en este curso?
                            <span class="questions__arrow">
                                <img src="./img/arrow.svg" alt="" class="questions__img">
                            </span>
                        </h3>
                        <p class="questions__show">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae hic
                            voluptates ipsa libero facilis sed numquam cupiditate veniam sunt. Quo, vero! Fugiat ipsa,
                            debitis placeat nihil quasi repellat nulla dolores numquam nam soluta saepe est possimus
                            suscipit modi tenetur? Deserunt eaque officiis quibusdam excepturi? Provident tempore
                            impedit illum? Exercitationem, commodi?</p>
                    </div>
                </article>
            </section>

    </main>

    <footer class="footer">
        <section class="footer__container container">
            <nav class="nav nav--footer">
                <h2 class="footer__title">Curso CSS.</h2>
                <ul class="nav__link nav__link--footer">
                    <li class="nav__items">
                        <a href="#" class="nav__links">Inicio</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Acerca de</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Contacto</a>
                    </li>
                    <li class="nav__items">
                        <a href="#" class="nav__links">Blog</a>
                    </li>
                </ul>
            </nav>
            <form class="footer__form" action="https://formspree.io/f/mrgvgkpp" method="POST">
                <h2 class="footer__newsletter">Suscribete a la newsletter</h2>
                <div class="footer__inputs">
                    <input type="email" placeholder="Email" class="footer__input" name="_replyto">
                    <input type="submit" placeholder="Registrate" class="footer__submit" type="submit">
                </div>
            </form>
        </section>
        <section class="footer__copy container">
            <div class="footer__social">
                <a href="#" class="footer__icons"> <img src="./imagenes/facebook.svg" class="footer__img" alt=""></a>
                <a href="#" class="footer__icons"> <img src="./imagenes/twitter.svg" class="footer__img" alt=""></a>
                <a href="#" class="footer__icons"> <img src="./imagenes/youtube.svg" class="footer__img" alt=""></a>
            </div>
            <h3 class="footer__copyright">Derechos reservados &copy;Fernando Hinostroza </h3>
        </section>
    </footer>
    <script src="./js/slider.js"></script>
    <script src="./js/questions.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>