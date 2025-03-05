<?php
session_start();

// Conectar a la base de datos
$conexion = new mysqli("localhost", "root", "", "mi_base_de_datos");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Obtener datos del formulario
$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Evitar inyecciones SQL
$usuario = $conexion->real_escape_string($usuario);
$password = $conexion->real_escape_string($password);

// Buscar usuario en la base de datos
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND password='$password'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    $_SESSION['usuario'] = $usuario; // Guardar usuario en sesión
    header("Location: index.php"); // Redirigir a la página principal
    exit();
} else {
    echo "<script>alert('Usuario o contraseña incorrectos'); window.location.href='login.php';</script>";
}

$conexion->close();
?>