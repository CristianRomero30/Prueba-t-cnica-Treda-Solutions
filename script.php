<?php

// Establecer una conexión con la base de datos

// Establecer una conexión con la base de datos
$mysqli = new mysqli("localhost", 'root', '', "tiendas");

// Comprobar la conexión
if ($mysqli->connect_errno) {
    echo "Error al conectarse con la base de datos: " . $mysqli->connect_error;
    exit;
}
// Comprobar la conexión
if ($mysqli->connect_errno) {
    echo "Error al conectarse con la base de datos: " . $mysqli->connect_error;
    exit;
}

// Validar que todos los campos están presentes
if (isset($_POST["nombre"]) && isset($_POST["sku"]) && isset($_POST["descripcion"]) && isset($_POST["valor"]) && isset($_POST["tienda"]) && isset($_POST["imagen"])) {
    // Validar que el campo SKU es único
    $sku = $_POST["sku"];
    $resultado = $mysqli->query("SELECT COUNT(*) AS total FROM productos WHERE sku = '$sku'");
    if ($resultado->fetch_assoc()["total"] > 0) {
        echo "Error: el SKU ingresado ya está en uso.";
        exit;
    }
    // Insertar el nuevo producto en la base de datos
    $nombre = $_POST["nombre"];
    $descripcion = $_POST["descripcion"];
    $valor = $_POST["valor"];
    $tienda = $_POST["tienda"];
    $imagen = $_POST["imagen"];
    $sentencia = $mysqli->prepare("INSERT INTO productos (nombre, sku, descripcion, valor, tienda, imagen) VALUES (?, ?, ?, ?, ?, ?)");
    $sentencia->bind_param("sssdss", $nombre, $sku, $descripcion, $valor, $tienda, $imagen);
    $sentencia->execute();
    echo "El nuevo producto ha sido insertado correctamente.";
} else {
    echo "Error: se deben enviar todos los campos del formulario.";
}

// Cerrar la conexión
$mysqli->close();

?> 