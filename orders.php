<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
</head>
<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: #035D8A; color: white; border-radius: 5px;">LISTADO DE PRODUCTOS</h1>
    </div>

    <br>

    <div class="container">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">IdOrder</th>
                    <th scope="col">TotalPrice</th>
                    <th scope="col">OrderDetails</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    require("config/conexion.php");
                    
                    $sql = $conexion->query("SELECT * FROM order INNER JOIN category ON order.IdCategory = category.IdCategory
                                                                 INNER JOIN products ON order.IdProducts = products.IdProducts");
                    
                    while($resultado = $sql->fetch_assoc()) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $resultado["IdOrder"]?></th>
                        <th scope="row"><?php echo $resultado["TotalPrice"]?></th>
                        <th scope="row"><?php echo $resultado["OrderDetails"]?></th>
                        <th scope="row"><?php echo $resultado["Price"]?></th>
                        <th scope="row"><?php echo $resultado["ProductName"]?></th>
                        <th scope="row"><?php echo $resultado["CategoryName"]?></th>
                        <th>
                            <a href="formularios/EditarForm.php?Id=<?php echo $resultado["IdOrder"]?>" class="btn btn-warning"><i class="uil uil-pen"></i></a>
                        </th>
                        <th>
                            <a href="crud/eliminarDatos.php?Id=<?php echo $resultado["IdOrder"]?>" class="btn btn-danger"><i class="uil uil-trash"></i></a>
                        </th>
                        
                    </tr>
                <?php
                    }
                ?>
            </tbody>

        </table>

        <div class="container">
            <a href="formularios/AgregarForm.php" class="btn btn-success">Agregar producto</a>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>