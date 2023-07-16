<?php include_once "header.php" ?>
<?php
include_once "funciones.php";
$productos = obtenerProductos();
?>

<section>
    <div class="contenedor">
        <h2 id="title-carta">CARTA</h2>
        <div class="rowProducts">
            <?php foreach ($productos as $producto) { ?>
                <div class="card">
                        <div class="card-img">
                            <img src="img/<?php echo $producto->imagen ?>" alt="">
                        </div>
                        <div class="card-info">
                            <p class="text-title"><?php echo $producto->nombre ?></p>
                            <p class="text-body"><?php echo $producto->descripcion ?></p>
                        </div>
                        <div class="card-footer">
                            <span class="text-title" name="price">$<?php echo number_format($producto->precio, 2) ?></span>
                            <?php if (productoYaEstaEnCarrito($producto->id)) { ?>
                                <form action="eliminar_del_carrito.php" method="post" style="margin-top: 12px; display: flex; align-items: center; justify-content: space-around; width: 100%;">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <span class="">
                                        <i class="fa fa-check"></i>&nbsp;En el carrito
                                    </span>
                                    <button class="button">
                                        <i class="fa fa-trash-o"></i>&nbsp;Quitar
                                    </button>
                                </form>
                            <?php } else { ?>
                                <form action="agregar_al_carrito.php" method="post" style="margin-top: 12px; display: flex; align-items: center; justify-content: space-around; width: 100%;">
                                    <input type="hidden" name="id_producto" value="<?php echo $producto->id ?>">
                                    <button class="button">
                                        <i class="fa fa-cart-plus"></i>&nbsp;Agregar al carrito
                                    </button>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
            <?php } ?>
        </div>
    </div>
</section>