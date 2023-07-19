<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
$productos = json_decode(json_encode($productos), true);
if (count($productos) > 0) {
    ?>
    <section>
        <h1>
           Gracias por tu compra
        </h1>
        <a href="tienda.php">Ver tienda</a>
    </section>

    <?php
    foreach ($productos as $producto) {
        quitarProductoDelCarrito($producto['id']);
    }
} else {
    ?>
    <h2>
        Visita la tienda para agregar productos a tu carrito
    </h2>
<?php } ?>
