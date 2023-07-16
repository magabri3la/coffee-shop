<?php require_once "config/conexion.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="styles/stylesBoos.css" rel="stylesheet" />
</head>

<body>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Carrito</h1>
                <p class="lead fw-normal text-white-50 mb-0">Tus Productos Agregados.</p>
            </div>
        </div>
    </header>
    <section class="py-5">
        <div class="container px-4 px-lg-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Producto</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody id="tblCarrito">
                                <tr>
                                    <th scope="row">
                                        <?php echo $resultado["IdProducts"] ?>
                                    </th>
                                    <th scope="row">
                                        <?php echo $resultado["ProductName"] ?>
                                    </th>
                                    <th scope="row">
                                        <?php echo $resultado["Price"] ?>
                                    </th>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-5 ms-auto">
                    <h4>Total a Pagar: <span id="total_pagar">0.00</span></h4>
                    <div class="d-grid gap-2">
                        <button class="btn btn-warning" type="button" id="btnVaciar">Vaciar Carrito</button>
                        <button class="btn btn-success" type="button" id="btnEnviar">Enviar pedido</button>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <script>
        const elementosGuardados = JSON.parse(localStorage.getItem('carrito')) || [];
        const tablaBody = document.getElementById('tblCarrito');
        const totalPagar = document.getElementById('total_pagar');

        function generarTabla() {
            tablaBody.innerHTML = '';
            let totalAPagar = 0;

            elementosGuardados.forEach(elemento => {
            const fila = document.createElement('tr');

            const celdaProductId = document.createElement('th');
            celdaProductId.setAttribute('scope', 'row');
            celdaProductId.textContent = elemento.id;

            const celdaName = document.createElement('th');
            celdaName.setAttribute('scope', 'row');
            celdaName.textContent = elemento.name;

            const celdaPrice = document.createElement('th');
            celdaPrice.setAttribute('scope', 'row');
            celdaPrice.textContent = elemento.price;

            fila.appendChild(celdaProductId);
            fila.appendChild(celdaName);
            fila.appendChild(celdaPrice);
            
            tablaBody.appendChild(fila);
            totalAPagar += parseInt(elemento.price);
            });

            totalPagar.innerText = totalAPagar;
        }

        generarTabla();

        function enviarDatosAlServidor() {
            // Realiza una solicitud AJAX para enviar los datos a PHP
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'enviarPedido.php', true);
            xhr.setRequestHeader('Content-Type', 'application/json');

            xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            // La respuesta desde PHP se ha procesado correctamente
            console.log(xhr.responseText);
            }
            };

            xhr.send(JSON.stringmify(elementosGuardados));
            console.log("HOLAAA MUNDO!")
        }

        const enviarDatosBtn = document.getElementById('btnEnviar');
        enviarDatosBtn.addEventListener('click', () => enviarDatosAlServidor());
    </script>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <script>
        mostrarCarrito();

        function mostrarCarrito() {
            if (localStorage.getItem("productos") != null) {
                let array = JSON.parse(localStorage.getItem('productos'));
                if (array.length > 0) {
                    $.ajax({
                        url: 'ajax.php',
                        type: 'POST',
                        async: true,
                        data: {
                            action: 'buscar',
                            data: array
                        },
                        success: function (response) {
                            console.log(response);
                            const res = JSON.parse(response);
                            let html = '';
                            res.datos.forEach(element => {
                                html += `
                            <tr>
                                <td>${element.IdProducts}</td>
                                <td>${element.Name}</td>
                                <td>${element.precio}</td>
                                <td>1</td>
                                <td>${element.precio}</td>
                            </tr>
                            `;
                            });
                            $('#tblCarrito').html(html);
                            $('#total_pagar').text(res.total);
                        },
                        error: function (error) {
                            console.log(error);
                        }
                    });
                }
            }
        }
    </script>
</body>

</html>