<?php include_once "header.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductosEnCarrito();
?>
<div class="container">
    <?php
    if (count($productos) <= 0) {
        ?>
        <section class="hero is-info">
            <div class="hero-body">
                <div class="container">
                    <h1 class="title">
                        Todavía no hay productos
                    </h1>
                    <h2 class="subtitle white">
                        Visita la tienda para agregar productos a tu carrito
                    </h2>
                    <a href="tienda.php" class="button is-warning">Ver tienda</a>
                </div>
            </div>
        </section>
    <?php } else { ?>
        <div class="columns">
            <div class="column">
                <h2 class="tituloCart">Mi carrito de compras</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Descripción</th>
                            <th>Precio</th>
                            <th>Quitar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        foreach ($productos as $producto) {
                            $total += $producto->precio;
                            ?>
                            <tr>
                                <td>
                                    <?php echo $producto->nombre ?>
                                </td>
                                <td>
                                    <?php echo $producto->descripcion ?>
                                </td>
                                <td>$
                                    <?php echo number_format($producto->precio, 2) ?>
                                </td>
                                <td>
                                    <form action="eliminar_del_carrito.php" method="post">
                                        <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                        <input type="hidden" name="redireccionar_carrito">
                                        <button class="btn">
                                            <svg viewBox="0 0 15 17.5" height="17.5" width="15" xmlns="http://www.w3.org/2000/svg"
                                                class="icon">
                                                <path transform="translate(-2.5 -1.25)"
                                                    d="M15,18.75H5A1.251,1.251,0,0,1,3.75,17.5V5H2.5V3.75h15V5H16.25V17.5A1.251,1.251,0,0,1,15,18.75ZM5,5V17.5H15V5Zm7.5,10H11.25V7.5H12.5V15ZM8.75,15H7.5V7.5H8.75V15ZM12.5,2.5h-5V1.25h5V2.5Z"
                                                    id="Fill"></path>
                                            </svg>
                                        </button>
                                    </form>
                                </td>
                            <?php } ?>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" class="is-size-4 has-text-right"><strong>Total</strong></td>
                            <td colspan="2" class="is-size-4">
                                $
                                <?php echo number_format($total, 2) ?>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <a class="button" href="terminar_compra.php">Terminar compra</a>
            </div>
        </div>
    <?php } ?>
</div>