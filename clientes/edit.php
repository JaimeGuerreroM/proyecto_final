<?php
include('../config/config.php');
include('data.php');
$p = new recetas();
$data = mysqli_fetch_object($p->getOne($_GET['id']));
$date = new DateTime($data->fecha);

if (isset($_POST) && !empty($_POST)){
  $_POST['imagen'] = $data->imagen;
  if ($_FILES['imagen']['name'] !== ''){
    $_POST['imagen'] = saveImage($_FILES);
  }
  $update = $p->update($_POST);
  if ($update){
    $error = '<div class="alert alert-success" role="alert">Cliente modificado correctamente</div>';
  }else{
    $error = '<div class="alert alert-danger" role="alert" > Error al modificar un cliente </div>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MODIFICAR VISITA</title>
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
          <a class="nav-link" href="add.php"> Solicitar vista </a>
          
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
<br>
<br>
<br>
<br>
<h1>Editar Cliente</h1>
<div class="container">
<?php
    if (isset($error)){
      echo $error;
    }
    ?>
<!-- LINPIAR FORMULARIO -->
<form method="POST" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="text" name="nombres" id="nombres" value="<?= $data->nombres ?>"  class="form-control" >
    <input type="hidden" name="id" id="id" value="<?= $data->id ?>" />
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Correo</label>
    <input type="email" name="correo" id="correo" value="<?= $data->correo ?>"  class="form-control" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Celular</label>
    <input type="text" name="celular" id="celular" value="<?= $data->celular ?>" class="form-control"  >
  </div>
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Fecha y hora de la visita</label>
    <input type="datetime" name="fecha" id="fecha" value="<?= $date->format('Y-m-d\TH:i') ?>"class="form-control" >
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Dirección de la visita</label>
    <input type="text" name="direccion" id="direccion" class="form-control">
  </div>
  <div class="col-md-6">
    <label for="inputAddress" class="form-label">Detalles de la visita</label>
    <input type="text" name="detalles" id="detalles" class="form-control">
  </div>
  <div class="col-12">
    <button  class="btn btn-primary">Modificar</button>
  </div>
</form>
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
</div>
</div>
</footer>
<!-- Fin Footer -->
<!-- Inicio Boton de whatsApp -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=573138530374&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>  
    


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    

</body>
</html>