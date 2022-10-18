<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decorar DC</title>
    <link rel="icon" type="image/x-icon" href="./imagenes/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dangrek&display=swap" rel="stylesheet">
<link href="css/style.css" rel="stylesheet" />
<link rel="stylesheet" href="./iconos/fonts.css">
<link rel="stylesheet" href="./css/mq.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
  <div class="contenedor">
 <!-- INICIO DEL MENU DE NEVEGACIÓN-->

<nav class="navbar navbar-expand-lg text-uppercase fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php"><img src="./imagenes/logo-decorar-dc-60px.png" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav letranav">
          <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
          <li class="nav-item dropdown letranav">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Productos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="piso-laminado.php">Piso Laminado</a></li>
            <li><a class="dropdown-item" href="techo-pvc.php">Techo PVC</a></li>
            <li><a class="dropdown-item" href="persianas.php">Persianas</a></li>
          </ul>
        </li>
          <a class="nav-link" href="contactenos.html">Contactenos</a>
          <a class="nav-link" href="clientes/add.php"> Registrar sesion </a>
          <a class="nav-link" href="clientes/lista.php"> Ver agenda </a>
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
<div class="container">
<center><img src="imagenes/favicon.png" alt="centered image" height="64" width="64"> </center>
<h1>INICIAR SECCION</h1>
<!-- Inicio contenido 1 -->
<div class="column">
<form action="./clientes/lista.php">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> Correo electrónico </label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label"> Contraseña </label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1"> Revisar </label>
        </div>
        <button type="submit" class="btn btn-primary"> Enviar </button>
      </form>
</div>
<!-- Fin contenido 1  -->

</div>
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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=573138530374&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>  
    


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>    
</div>
</body>
</html>