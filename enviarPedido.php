<?php
include("./config/conexion.php");

// Obtiene los datos enviados desde JavaScript
$data = json_decode(file_get_contents('php://input'), true);

// Itera sobre los datos y guárdalos en la base de datos
foreach ($data as $elemento) {
  $productId = $elemento['IdProducts'];
  $name = $elemento['name'];
  $price = $elemento['price'];

  // Ejemplo de cómo insertar los datos en una tabla llamada "productos"
  $sql = "INSERT INTO order (IdProducts, Name, Price) VALUES ('$productId', '$name', '$price')";
  
  if ($conn->query($sql) !== TRUE) {
    echo "Error al insertar el producto con ID $productId: " . $conn->error;
  }
}

// Cierra la conexión a la base de datos
$conn->close();

// Envía una respuesta al cliente (JavaScript) para indicar que los datos fueron guardados
echo 'Datos guardados correctamente en la base de datos.';
?>