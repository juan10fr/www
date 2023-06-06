<?php
// Reanuda la sesión iniciada
session_start();
// Cerrar la sesión
session_destroy();

// Iniciamos código PHP
// Cargar el marco superior
require_once('marcosup.php');
// Fin del código PHP
?>
<div class="py-5 bg-info" style="background-image: url(imagenes/Entrada.jpg); background-position: center; background-size: cover; height: 80vh;">
  <div class="container">
    <div class="row">
      <div class="bg-none text-info col-12 col-sm-12 col-md-7 col-lg-7">
        <h1 style="background-color: black;"><b>Has salido de la sesión</b></h1>
      </div>
    </div>
  </div>
</div>
<?php
// Iniciamos código PHP
// Cargar el marco inferior
require_once('marcoinf.php');
// Fin del código PHP
?>

