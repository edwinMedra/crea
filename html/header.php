<?php
error_reporting(0);
session_start();
include("conex.php");
$sesion = $_SESSION['correo'];
if (!($sesion == null || $sesion == '')){
  header("Location:../html-php/index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/pie.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/headerr.css">

    <title>header</title>
</head>
<body>

     <!--Inicio header-->
     <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-navbar fixed-top">
        <div class="container-fluid">
    
            <a class="navbar-brand" href="index.php">
                <img src="../imagen/estoyAnsioso/esflyInfo.png" class="" id="logo" alt="">
            </a>
    
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="Reservarvuelos.php">Reserva tu vuelo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="ofertasYDestinos.php">Ofertas y destinos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="check-in.php">Check-in</a>
                    </li>
                </ul>
    
                <span class="navbar-text"></span>
    
                <form class="d-flex" role="search">
                    <a href="login.php" class="btn btn-primary-outline-success btn-primary ms-1" type="submit">Iniciar sesión</a>

                    <a href="registro.php" class="btn btn-registro ms-1 " href="../html/registro.html" type="submit">Registrarse</a>

                </form>
                <a href="busqueda.php" class="btn  btn-primary-outline ms-1" type="submit"><img src="../imagen/header/lupa.png" class="" id="lupa" alt="" width="30"> Buscar</a>
            </div>
        </div>
    </nav>
    
    <!--Fin header-->   
    
    
</body>
</html>