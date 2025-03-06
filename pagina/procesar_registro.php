<?php

session_start();
include 'conexion.php'; // Conectar a la base de datos


error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Conexión a la base de datos (ajusta los valores según tu servidor)
$conexion = new mysqli("localhost", "usuario_db", "clave_db", "nombre_db");

// Verifica si la conexión es correcta
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Verifica si los datos fueron enviados por el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = trim($_POST['usuario']);
    $email = trim($_POST['email']);
    $clave = password_hash($_POST['clave'], PASSWORD_BCRYPT); // Cifrar la contraseña

    // Insertar en la base de datos
    $sql = "INSERT INTO usuarios (usuario, email, clave) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $usuario, $email, $clave);

    if ($stmt->execute()) {
        // Redirigir al login después del registro exitoso
        header("Location: login.php");
        exit();
    } else {
        echo "Error en el registro: " . $stmt->error;
    }

    // Cerrar la conexión
    $stmt->close();
    $conexion->close();
}
?>
