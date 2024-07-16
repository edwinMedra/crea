<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Importación de librerias-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link
    href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
  <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon" />
  <link rel="stylesheet" href="../css/headerr.css" />
  <link rel="stylesheet" href="../css/pie.css" />
  <link rel="stylesheet" href="../css/datosVIP.css" />
  <title>En vuelos VIP</title>
</head>

<body>
  <!---Header de pagina web hecho con frameworks-->
  <?php
   include ("header.php");
   ?>
  <!--Fin header-->
  <div class="back">
    <img src="../imagen/datosVIP/fondo.png" alt="" />
    <div class="titulo">
      <p>En vuelos VIP</p>
    </div>
  </div>

  <div class="container-fluid text-center  my-5 rounded-5 w-50 py-2 pt-4" id="tipos">
    <p><b>¿Qué necesitas?</b></p>
  </div>


  <div class="container-fluid my-5">
    <div class="row ">


      <div class="col-lg-6 my-5" >
        <div class="row text-center" id="cuadro-hover">
         <div class="col-12 " ><img  src="../imagen/datosEspeciales/ayuda.png" alt="" class="w-75" id="imagen"></div>
         <div class="col-12 " id="cuadro-hover"> <p id="marco" class="px-3 py-3">Ayuda especial</p></div>
        </div>
      </div>
     

      <div class="col-lg-6 h-25 my-5 mx-auto" >
        <div class="row text-center">
         <div class="col-12"><img src="../imagen/datosEspeciales/empleados.png" alt="" class="w-75"></div>
         <div class="col-12"> <p id="marco" class="px-3 py-3">Empleados a bordo de mi vuelo</p></div>
        </div>
      </div>


    </div>
  </div>
  <!---->
  <div class="container-fluid text-center  my-5 rounded-5 w-50 py-2 pt-4" id="tipos">
    <p><b>¿Cómo te sientes?</b></p>
  </div>

  <div class="container-fluid my-5">
    <div class="row w-50 mx-auto rounded-5 my-3" id="cuadros">
      <div class="col-3"><img src="../imagen/datosEspeciales/aburrido.png.png" alt="" class="w-75"></div>
      <div class="col-9 my-auto text-center fs-3">¿Estas aburrido?</div>
    </div>
    <!---->
    <div class="row w-50 mx-auto rounded-5 my-3 py-2" id="cuadros">
      <div class="col-9 my-auto text-center fs-3">¿Estas ansioso?</div>
      <div class="col-3"><img src="../imagen/datosEspeciales/ansioso.png.png" alt="" class="w-75"></div>
    </div>
  </div>
  
  <?php
include ("pie.php");
?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>