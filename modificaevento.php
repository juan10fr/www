<?php
$id = $_POST['id'];    
$nick = $_POST['nick'];   
$clave = $_POST['clave']; 
$nombape = $_POST['nombape'];  
$nivel = $_POST['nivel']; 

// Invocamos el archivo con la conexión a la base de datos
require_once('gest/conexion.php');

$sentencia = "UPDATE evento SET 
    nombre='$nick', 
    fecha_de_inicio='$clave', 
    fecha_de_fin='$nombape', 
    direccion='$nivel'
    WHERE id_evento=$id";

if (mysqli_query($c, $sentencia)) {
    // Redireccionar a gestionevento.php
    header("Location: gestionevento.php");
    exit; // Asegurarse de que el script se detiene después de redireccionar
} else {
    echo "Error: " . mysqli_error($c);
}

mysqli_close($c);
?>
