<?php
$servidor = "sql210.infinityfree.com"; // ⚠️ Reemplaza con el host de tu base de datos en InfinityFree
$usuario_db = "if0_38455448"; // ⚠️ Reemplaza con tu usuario de base de datos
$clave_db = "1PRWryNQOZa "; // ⚠️ Reemplaza con la contraseña de tu base de datos
$nombre_db = "if0_38455448_XXX"; // ⚠️ Reemplaza con el nombre real de tu base de datos

$conexion = new mysqli($servidor, $usuario_db, $clave_db, $nombre_db);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
