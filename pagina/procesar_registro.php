<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$conexion = new mysqli("localhost", "usuario_db", "clave_db", "nombre_db");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $clave = password_hash($_POST['clave'], PASSWORD_BCRYPT); // Cifrar contraseña

    $sql = "INSERT INTO usuarios (usuario, email, clave) VALUES (?, ?, ?)";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sss", $usuario, $email, $clave);

    if ($stmt->execute()) {
        echo "Registro exitoso. <a href='login.php'>Iniciar sesión</a>";
    } else {
        echo "Error en el registro: " . $stmt->error;
    }

    $stmt->close();
    $conexion->close();
}
?>
