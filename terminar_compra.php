<?php include_once "header.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
$productos = json_decode(json_encode($productos), true);
if (count($productos) > 0) {
    ?>

    <body>


        <section class="centrar-contenido">
            <h1 class="titulo-TerminarCompra">
                Gracias por tu compra
            </h1>
            <button class="button">
                <i class="fa fa-cart-plus"></i><a href="tienda.php" class="aLink">/a>
            </button>
        </section>

        <?php
        foreach ($productos as $producto) {
            quitarProductoDelCarrito($producto['id']);
        }
} else {
    ?>
        <section class="centrar-contenido">
            <h2 class=" titulo-TerminarCompra">
                Visita la tienda para agregar productos a tu carrito
            </h2>
            <button class="button">
                <i class="fa fa-cart-plus"></i><a class="aLink" href="tienda.php">Ver tienda</a>
            </button>
        </section>
    </body>
<?php } ?>