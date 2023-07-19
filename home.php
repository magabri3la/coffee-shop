<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso CSS</title>
    <link rel="stylesheet" href="./styles/normalize.css">
    <link rel="stylesheet" href="./styles/styleshome.css">
    <!--AMIMATE CSS-->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
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
            <h1 class="hero__title">Aprende CSS desde CERO hasta dominarlo.</h1>
            <p class="pero__paragraph">Elige aprender CSS de una vez por todas, una vez que termines este curso serás
                capaz de crear cualquier layout con CSS y crear tus propias animaciones.</p>
            <a href="#" class="cta">Comienza ahora</a>
        </section>
    </header>

    <main>
       
        <section class="testimony">
            <div class="testimony__container container">
                <img src="./img/leftarrow.svg" class="testimony__arrow" id="before" alt="">
                <section class="testimony__body testimony__body--show" data-id="1">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Jordan Apexander, <span class="testimony__course">
                                estudiante de CSS.</span></h2>
                        <p class="testimony__review">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Aspernatur itaque libero modi aliquam officia quia ipsam adipisci officiis assumenda
                            molestiae ullam ducimus ea dolores veniam, voluptate eligendi commodi in obcaecati quasi
                            placeat eaque nisi! Odit aliquid fugit aut libero fuga.</p>
                            
                            <a href="#" class="cta btn1">Ver Catálogo</a>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./img/burguer2.jpg" alt="" class="testimony__img">
                    </figure>
                </section>
                <section class="testimony__body" data-id="2">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Alejandra Perez, <span class="testimony__course">
                                estudiante de CSS.</span></h2>
                        <p class="testimony__review">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Aspernatur itaque libero modi aliquam officia quia ipsam adipisci officiis assumenda
                            molestiae ullam ducimus ea dolores veniam.</p>
                            <a href="#" class="cta btn1">Ver Catálogo</a>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./img/capuccino1.jpg" alt="" class="testimony__img">
                    </figure>
                </section>
                <section class="testimony__body" data-id="3">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Roberto Carlos, <span class="testimony__course">
                                estudiante de CSS.</span></h2>
                        <p class="testimony__review">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Aspernatur itaque libero modi aliquam officia quia ipsam adipisci officiis assumenda
                            molestiae ullam ducimus ea dolores.</p>
                            <a href="#" class="cta btn1">Ver Catálogo</a>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./img/postres1.jpg" alt="" class="testimony__img">
                    </figure>
                </section>
                <section class="testimony__body" data-id="4">
                    <div class="testimony__texts">
                        <h2 class="subtitle">Mi nombre es Cristian Rivero, <span class="testimony__course">
                                estudiante de CSS.</span></h2>
                        <p class="testimony__review">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                            Aspernatur itaque libero modi aliquam officia quia ipsam adipisci officiis assumenda
                            molestiae ullam ducimus ea dolores.</p>
                            <a href="#" class="cta btn1">Ver Catálogo</a>
                    </div>
                    <figure class="testimony__picture">
                        <img src="./img/coctel1.jpg" alt="" class="testimony__img">
                    </figure>
                </section>
                <img src="./img/rightarrow.svg" class="testimony__arrow" id="next" alt="">
            </div>
        </section>
     
        <section class="knowledge">
            <div class="knowledge__container container">
                <figure class="knowledge__picture">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/MBY1k9MwVIc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </figure>
                <div class="knowledge__texts">
                    <h2 class="subtitle">Curso completo de CSS3. ¡Domina CSS de una vez por todas!</h2>
                    <p class="knowledge__paragraph">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero
                        incidunt recusandae illum nobis praesentium ut est sapiente unde? Non, porro?</p>
                    <a href="#" class="cta">Ingresa al Curso</a>
                </div>
              
                
            </div>
        </section>

      
        <section class="questions container2">
            
        <section class="questions__offer">
            <h2 class="subtitle">¿Estas listo para aprender CSS?</h2>
            <p class="questions__copy">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus, perspiciatis
                similique pariatur ut tempore obcaecati beatae sapiente vel ipsam consequatur nisi est esse nemo nam
                sit? Deserunt, nemo mollitia doloribus ea ipsam quam harum, fugit atque asperiores exercitationem
                deleniti. Impedit dolorem numquam esse?</p>
                <a href="#" class="cta">Aprende ahora</a>
        </section>
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
            <form class="footer__form" action="https://formspree.io/f/mrgvgkpp"
            method="POST">
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