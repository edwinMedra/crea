<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../imagen/header/favicon.png" type="image/x-icon">

        <!--Comentario sobre el link para importar la tipografia-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bayon&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
        <!--Fin tipografia-->
        <link rel="stylesheet" href="../css/header.css">
        <link rel="stylesheet" href="../css/pie.css">
        <link rel="stylesheet" href="..//css/datos de cuenta.css">
    <title>Información de cuenta</title>
</head>

<?php 
include("header-log.php");
?> 

<body>
   <div class="Espacio1"></div>

      <div class="Bloque">

         <div class="lado_izq">
            <div class="foto_perfil">
                <img class="perfil" src="../imagen/datosCuenta/foto_usuario.png" alt="">
            </div>
            <div class="subir_foto">
                <p class="letra_subirfoto">Subir foto</p>
            </div>
            <div class="texto_en_gris">
                <p class="requisitos">Requisitos para la foto: “Debe ser de frente, descubierta, sin accesorios y sin lentes o gafas de sol”</p>
            </div>
         </div>

         <div class="espacio2"></div>

         <div class="lado_derech">
            
            <div class="Info_general">
                <p>Información general</p>
                <img class="logito2" src="../imagen/datosCuenta/logito.png">
            </div>

            <!--FORMULARIO NOMBRE Y APELLIDO-->
            <div class="nombreYapellido"> <p>Nombre y Apellido</p><p class="asterisco">*</p>
            </div>
            <div><label for="name"><!--Nombre:--></label><input type="text" id="name" name="nombre" class="formuNombre"></div>


             <!--FORMULARIO DUI-->

            <div class="dui"> 
                <p>Dui</p><p class="asterisco">*</p>
            </div>
            <div><label for="name"></label> <input type="text" id="dui" name="dui" class="formuDui"></div>

            <!--FORMULARIO FECHA DE NACIMIENTO-->
            <div class="fechaNacimiento"> 
                <p>Fecha de Nacimiento</p><p class="asterisco">*</p>
            </div>
            <div><form>
                <label for="fechaNacimiento"></label>
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="formuNacimiento"></form>
            </div>
    
            <!--FORMULARIO CORREO-->
            <div class="correoElectronico"> 
                <p>Correo Electrónico</p>
            </div>
             <div class="espacio_correo">
                <form>
                    <label for="correo"></label>
                    <input type="email" id="correo" name="correo" required class="correo">
                </form>
                <div class="cambiar_datos"><p class="letra_cambiardatos">Cambiar datos</p></div>
             </div>

            <!--FORMULARIO PASAPORTE-->
            <div class="pasaporte">
                <p>Pasaporte</p><p class="asterisco">*</p>
            </div>
            <div><label for="Pasaporte"></label><input type="text" id="Pasaporte" name="Pasaporte" class="formuPasaporte"></div>

            <!--FORMULARIO PAIS DE ORIGEN-->
            <div class="paisOrigen">
                <p>País de origen</p><p class="asterisco">*</p>
            </div>

            <div>
                <form>
                    <label for="pais"></label>
                    <select id="pais" name="pais" class="formupais">
                        <option value="Antigua y Barbuda">Antigua y Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belice">Belice</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Brasil">Brasil</option>
                        <option value="Canadá">Canadá</option>
                        <option value="Chile">Chile</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Estados Unidos">Estados Unidos</option>
                        <option value="Granada">Granada</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haití">Haití</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="México">México</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Panamá">Panamá</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Perú">Perú</option>
                        <option value="República Dominicana">República Dominicana</option>
                        <option value="San Cristóbal y Nieves">San Cristóbal y Nieves</option>
                        <option value="San Vicente y las Granadinas">San Vicente y las Granadinas</option>
                        <option value="Santa Lucía">Santa Lucía</option>
                        <option value="Surinam">Surinam</option>
                        <option value="Trinidad y Tobago">Trinidad y Tobago</option>
                        <option value="Venezuela">Venezuela</option>
                    </select>
                </form>
            </div>

             <!--FORMULARIO DIRECCION-->
             <div class="direccion"> 
                <p>Dirección</p>
            </div>
             <div class="espacio_direccion">
                <form>
                    <label for="direccion"></label>
                    <input type="name" id="direccion" name="direccion" required class="formudireccion">
                </form>
                <div class="cambiar_datos"><p class="letra_cambiardatos">Cambiar datos</p></div>
             </div>






            </div>





            

         </div>
        </div>
   </div>

   <div class="Espacio_ultimo"></div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<footer>
    <div class="pie">
        <div class="left-pie-img">
            <img src="../imagen/index/pie-login.png" alt="">
        </div>
        <div class="datos-pie">
            <div class="text-left-pie">
                <h2>AYUDA</h2>
                <ul>
                    <li>Contactanos</li>
                    <li>Metodos de pago</li>
                    <li>Cambios y devoluciones</li>
                    <li>Preguntas frecuentes</li>
                    <li>Promociones</li>
                </ul>
            </div>
            <div class="text-2/4-pie">
                <h2>ACERCA DE</h2>
                <ul>
                    <li>Ubicación </li>
                    <li>Redes</li>
                </ul>
            </div>
            <div class="text-3/4-pie">
                <h2>NOSOTROS</h2>
                <ul>
                    <li>Somos ESfly</li>
                    <li>Alianzas y Beneficios</li>
                    <li>Accesibilidad</li>
                </ul>
            </div>
            <div class="text-derecha-pie">
                <h2>SIGUENOS</h2>
                <ul>
                    <li><img src="../imagen/index/whatsapp.png" alt="whatsapp">7270-9970</li>
                    <li><img src="../imagen/index/instagram.png" alt="instagram">ESfly_official</li>
                    <li><img src="../imagen/index/facebook.png" alt="facebook">ESfly_official</li>
                    <li><img src="../imagen/index/youtube.png" alt="youtube">ESfly_official</li>
                </ul>
            </div>
        </div>
        <hr class="br-footer">
        <ul class="datosFinales-pie">
            <li>Copyright © ESfly 2024</li>
            <li>A STAR ALLIANCE MEMBER  <img src="../imagen/index/STA.png" alt="STAR ALLIANCE MEMBER"></li>
            <li>Colegio Don Bosco 2 "B"</li>
        </ul>
    </div>
    <div class="pie-telefono">
        
    </div>
</footer>
</html>