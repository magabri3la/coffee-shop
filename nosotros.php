<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jitsi Coffee</title>
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
                    <a href="home.html" class="nav__links">Inicio</a>
                </li>
                <li class="nav__items">
                    <a href="nosotros.html" class="nav__links">Acerca de</a>
                </li>
                <li class="nav__items">
                    <a href="contacto.html" class="nav__links">Contacto</a>
                </li>
                <li class="nav__items">
                    <a href="#" class="nav__links">Blog</a>
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
                    <p class="about__paragraph">Nuestra misión es ofrecer una experiencia única en café, brindando
                        productos de alta calidad y un servicio excepcional, mientras creamos un ambiente acogedor donde
                        las personas puedan conectarse y disfrutar.</p>
                </article>
                <article class="about__icons">
                    <img src="./img/eye-3-svgrepo-com.svg" class="about__icon">
                    <h3 class="about__title">Visión</h3>
                    <p class="about__paragraph">Ser reconocidos como la cafetería de referencia en nuestra comunidad,
                        destacando por nuestra excelencia en café, servicio al cliente y compromiso con la
                        sostenibilidad, también deslumbrarlos con nuestros deliciosos potajes.</p>
                </article>
                <article class="about__icons">
                    <img src="./img/powerbi-svgrepo-com.svg" alt="" class="about__icon">
                    <h3 class="about__title">Objetivos</h3>
                    <p class="about__paragraph">
                        Nuestros objetivos son ofrecer productos de café de alta calidad, brindar una experiencia
                        excepcional al cliente, conectar con la comunidad local, fomentar la innovación en sabores y
                        métodos de preparación, y promover la sostenibilidad en nuestras prácticas comerciales.</p>
                </article>

            </div>
        </section>

        <section class="questions container" id="pfrecuentes">
            <h2 class="subtitle">Preguntas frecuentes</h2>

            <section class="questions__container">
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Quienes somos?
                            <span class="questions__arrow">
                                <img src="./img/arrow.svg" alt="" class="questions__img">
                            </span>
                        </h3>
                        <p class="questions__show">Somos una cadena de cafeterías fundada en el año 2019, nos destacamos por la pasión de
                            brindar a los amantes del café una experiencia única y auténtica. Con sede en una
                            encantadora cafetería en el corazón de la ciudad, Jitsi Coffee se ha convertido en un
                            destino popular para aquellos que buscan disfrutar de una taza de café excepcional en un
                            ambiente acogedor.</p>
                    </div>
                </article>
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿Quienes son nuestros fundandores?
                            <span class="questions__arrow">
                                <img src="./img/arrow.svg" alt="" class="questions__img">
                            </span>
                        </h3>
                        <p class="questions__show"><b>Nuestros fundadores son:</b><br>
                        Maria Gabriela Lopez Aponte<br>
                        Carlos Fernando Hinostroza Palian<br>
                        Davier Alejandro Lopez<br> </p>
                    </div>
                </article>
                <article class="questions__padding">
                    <div class="questions__answer">
                        <h3 class="questions__title">¿En donde nos encontramos?
                            <span class="questions__arrow">
                                <img src="./img/arrow.svg" alt="" class="questions__img">
                            </span>
                        </h3>
                        <p class="questions__show"> <b>Tenemos locales en:</b> <br>
                            Av. La Molina 232<br>
                        Av. Arequia 544<br>
                        Av. San Luis 232</p>
                    </div>
                </article>
            </section>
    </main>

    <section class="trivia">
        <div class="container">
            <h1 class="trivia-title">La Trivia Ganadora</h1>
            <div class="trivia-content">
                <button class="cta brown" id="start-button" onclick="startTrivia()">
                    <span class="hover-underline-animation">Comenzar a jugar</span>
                    <svg viewBox="0 0 46 16" height="10" width="30" xmlns="http://www.w3.org/2000/svg" id="arrow-horizontal">
                    <path transform="translate(30)" d="M8,0,6.545,1.455l5.506,5.506H-30V9.039H12.052L6.545,14.545,8,16l8-8Z"
                        data-name="Path 10" id="Path_10"></path>
                    </svg>
                </button>
    
                <div class="trivia-questions" id="question-container" style="display: none;">
                    <p id="question"></p>
                    <ul id="options" class="label">
                        <!-- Las opciones de respuesta se cargarán aquí dinámicamente -->
                    </ul>
                </div>
    
                <button id="next-button" onclick="nextQuestion()" style="display: none;"></button>
                <p id="timer" style="display: none;">Tiempo restante: 10</p>
    
                <h1 id="congratulations-message" style="display: none;">Felicitaciones, tu código de descuento es: <span>Jitsi50%</span></h1>
                <h1 id="retry-message" style="display: none;">Vuelve a intentarlo mañana para ganar el código de descuento.</h1>
            </div>
        </div>
    </section>

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
    <script src="./js/trivia.js"></script>

</body>

</html>