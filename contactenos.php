<?php
include("conexion.php");

if (isset($_POST['register'])) {
    if (
        strlen($_POST['fullname']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['direccion']) >= 1
    ) {
        $fullname = trim($_POST['fullname']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);
        $direccion = trim($_POST['direccion']);
        $consulta = "INSERT INTO insdatos(nombres, correo, celular, direccion)
            VALUES('$fullname', '$email', '$phone', '$direccion')";
        $resultado = mysqli_query($conexion, $consulta);
        if ($resultado) {
            ?>
            <h3 class="success">Tu registro se ha completado</h3>
            <?php
        } else {
            ?>
            <h3 class="error">Ocurrió un error</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llena todos los campos</h3>
        <?php
    }
}
?>