<?php
$id = $_POST['id'];
$nick = $_POST['nick'];
$clave = $_POST['clave'];
$nombape = $_POST['nombape'];
$nivel = $_POST['nivel'];
$niveles = isset($_POST['niveles']) ? $_POST['niveles'] : '';

// Invocamos el archivo con la conexión a la base de datos
require_once('gest/conexion.php');
$sentencia = "UPDATE cliente SET 
    nombre='$nick', 
    apellido='$clave', 
    direccion='$nombape', 
    telefono='$nivel',
    email='$niveles'
    WHERE id_cliente=$id";

if (mysqli_query($c, $sentencia)) {
    // Redireccionar a gestioncliente.php
    header("Location: gestioncliente.php");
    exit; // Asegurarse de que el script se detiene después de redireccionar
} else {
    echo "Error: " . mysqli_error($c);
}

mysqli_close($c);
?>

