<?php
include('../config/config.php'); /* Conexion de la config */
include('data.php'); /* Conexion de las recetas */

$libro= new recetas(); /* Llamo toda la clase que tienes mis recetas o funciones */
$todosRegistros= $libro->getAll(); /* Traigame la funcion ver todos los usuarios */

if(isset($_GET['id']) && !empty($_GET['id'])){
    $borrar= $libro->delete($_GET['id']);

    if($borrar){ /* SI SE BORRA */
        header('Location'. ROOT . 'clientes/lista.php'); /* QUE SE ACTUALIZA LISTA */
    }else{ /* SINO SE BORRA QUE ME MUESTRE QUE HUBO UN ERROR */
        $mensaje= "<div class='alert-danger' rol='alert'>Error al eleminar el cliente</div>";
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISITAS SOLICITADAS</title>
    <link rel="icon" type="image/x-icon" href="../imagenes/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="../iconos/fonts.css">
<link rel="stylesheet" href="../css/mq.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <div class="contenedor">
 <!-- INICIO DEL MENU DE NEVEGACIÓN-->

<nav class="navbar navbar-expand-lg text-uppercase fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php"><img src="../imagenes/logo-decorar-dc-60px.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav letranav">
          <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
          <li class="nav-item dropdown letranav">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../piso-laminado.php">Piso Laminado</a></li>
            <li><a class="dropdown-item" href="../techo-pvc.php">Techo PVC</a></li>
            <li><a class="dropdown-item" href="../persianas.php">Persianas</a></li>
          </ul>
        </li>
          <a class="nav-link" href="../contactenos.html">Contáctenos</a>
          <a class="nav-link" href="clientes/add.php"> Solicitar vista </a>
          
        </div>
      </div>
      <div class="social-bar">
        <a href="#" class="icon icon-facebook" target="_blank"></a>
        <a href="#" class="icon icon-instagram" target="_blank"></a>
        <a href="#" class="icon icon-whatsapp" target="_blank"></a>
            </div>
    </div>
</nav>
<!--FIN MENU DE NEVEGACIÓN-->

<?php include('../menu.php'); ?>

<div class="container">
    <center><h3>Lista de visitas porgramadas por clientes</h3></center>

    <div class="row">
        <?php
        while ($usuarios= mysqli_fetch_object($todosRegistros)){
            echo "<div class='col-6'>";
            echo "<div class='border border-info p-2'>";
            echo "<h5>Nombre: $usuarios->nombres  </h5>";
            echo "<p><b>Correo:</b> $usuarios->correo 
            <br>
            <b> Celular: </b>  $usuarios->celular
            </p>";
            echo "<p><b> Dirección del visita: </b>  $usuarios->direccion
            </p>";
            echo "<p><b> Detalles de la visita: </b>  $usuarios->detalles
            </p>";
            echo " <p> <b>Fecha y hora de la visita:</b> ".date("D", strtotime($usuarios->fecha)) . " " . date("d-M-Y H:i", strtotime($usuarios->fecha)). " </p> ";

            echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/clientes/edit.php?id=$usuarios->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/clientes/lista.php?id=$usuarios->id' >Eliminar</a> </div>";

            echo "</div>";
            echo "</div>";
        }

        ?>

        </div>
    </div>
    <br>   
<!-- Incio footer -->
<footer>
  <div class="d-flex justify-content-center">
    <div class="p-2"><a>Copyright © 2022</a></p></div>
    <div class="p-2">Creado por: Jaime Guerrero</div>
    <div class="p-2">
      <div class="social-bar-footer">
        <a href="#" class="icon icon-facebook" target="_blank"></a>
        <a href="#" class="icon icon-instagram" target="_blank"></a>
        <a href="#" class="icon icon-whatsapp" target="_blank"></a>
            </div>
    </div>
  </div>

</footer>
<!-- Fin Footer -->
<!-- Inicio Boton WhatApp -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=573138530374&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>  
    


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    
</div>
</body>
</html>