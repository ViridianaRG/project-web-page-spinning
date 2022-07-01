<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spinning</title>
    <link rel="stylesheet" href="http://localhost/proyecto/style.css">
    <script type="text/javascript">
        function valida() {
            if(document.formulario.nombre.value.length==0){
                alert("Tienes que escribir tu nombre")
                document.formulario.nombre.focus()
                window.location.href="#contacto";
                return 0;
            }
            if(document.formulario.telefono.value.length==0){
                alert("Tienes que escribir tu número telefónico")
                document.formulario.telefono.focus()
                window.location.href="#contacto";
                return 0;
            }
            if(document.formulario.email.value.length==0){
                alert("Tienes que escribir tu correo electrónico")
                document.formulario.email.focus()
                window.location.href="#contacto";
                return 0;
            }
            
            if(document.formulario.dudas.value.length==0){
                alert("Escribe tu duda o comentario")
                window.location.href="#contacto";
                document.formulario.dudas.focus()
                return 0;
            }
        }
    </script>
</head>
<body>
    <div class="hora">
        <script>
            let fechaHoy = new Date();
            let fecha = fechaHoy.getDate()+'/'+(fechaHoy.getMonth()+1)+'/'+fechaHoy.getFullYear();
            let hora = fechaHoy.getHours()+':'+ fechaHoy.getMinutes()+':'+ fechaHoy.getSeconds();
            let datos = "Fecha: " +fecha + "-----" + "Hora: " +hora;
            document.write(datos);
        </script>
    </div>
    <div class="navegacion">
        <div class="logo">
            <img class="" src="img/logo.png" alt="">
            <p class="texto-logo">LOGO</p>
        </div>
        <div class="enlaces">
            <a href="#acerca">Acerca de</a>
            <a href="#promociones">Paquetes</a>
            <a href="#clases">Clases</a>
            <a href="#contacto">Contáctanos</a>
        </div>
        <div class="regis-inicio">
            <a class="registro" href="registro.php">Registrarse</a>
            <a class="sesion" href="iniciarsesion.php">Iniciar Sesión</a>
        </div>
    </div>
    <div class="portada">
        <div class="titulo1"><p class="titulo">START</p></div><br>
        <div class="titulo2"><p class="titulo">TRAINING</p></div><br>
        <div class="titulo3"><p class="titulo">TODAY</p></div>
    </div>
    <div id="acerca">
        <div class="parrafo">
            <h2>ACERCA DE NOSOTROS</h2>
            <hr><br>
            <div class="div-parrafo"><p>Somos una empresa dedicada al entrenenamiento de fuerza mediante el ejercicio del spinning, en donde tenemos presencia en más de 5 Estados a lo largo de la República Mexicana con personal capacitado con un periodo de tiempo de 10 años que nos respaldan.</p></div>
            
        </div>
        <div class="imagen">
            <img src="img/acerca.jpg" alt="">
        </div>
    </div>
    <div id="promociones">
        <h2>PAQUETES</h2>
        <hr class="hr">
        <div class="platino">
            <h3>PLAN PLATINO</h3><br>
            <h4>$699</h4><br>
            <ul>
                <li>Acceso a todas las áreas</li>
                <li>Entrenenamiento personalizado</li>
                <li>Acceso a todas las clases</li>
                <li>Playera incluida</li>
                <li>Acceso a las regaderas</li>
                <li>Acceso a un locker</li>
            </ul>
        </div>
        <div class="premium">
            <h3>PLAN PREMIUM</h3><br>
            <h4 class="money">$999</h4><br>
            <ul>
                <li>Acceso a todas las áreas</li>
                <li>Entrenenamiento personalizado</li>
                <li>Nutriólogo</li>
                <li>Acceso a todas las clases</li>
                <li>Playera incluida</li>
                <li>Acceso a las regaderas</li>
                <li>Acceso a un locker</li>
                <li>Acceso a todas las sucursales de la república mexicana</li>
            </ul>
        </div>
        <div class="clasico">
        <h3>PLAN CLÁSICO</h3><br>
            <h4>$499</h4><br>
            <ul>
                <li>Acceso a todas las áreas</li>
                <li>Entrenenamiento personalizado</li>
                <li>Acceso a todas las clases</li>
                <li>Acceso a las regaderas</li>
            </ul>
        </div>
    </div>
    <div id="video">
        <h2>VÍDEO</h2>
        <hr class="hr"><br>
        <iframe width="630" height="350" src="https://www.youtube.com/embed/fuaBlvesZO4?start=358" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div id="clases">
        <h2>CLASES</h2>
        <hr class="hr">
        <table>
            <tr>
                <th>Clases</th>
                <th>Instructor</th>
                <th>Horario</th>
                <th>Días</th>
            </tr>
            <tr>
                <td>Spinning HIT</td>
                <td>Carlos Herrera</td>
                <td>7am-9am</td>
                <td>Lunes, Miércoles y Sábado</td>
            </tr>
            <tr>
                <td>Spinning Fuerza</td>
                <td>Rafael López</td>
                <td>10am-12pm</td>
                <td>Lunes, Martes, Jueves y Sábado</td>
            </tr>
            <tr>
                <td>Spinning Resistencia</td>
                <td>Julissa Sierra</td>
                <td>2pm-4pm</td>
                <td>Lunes, Miércoles y Viernes</td>
            </tr>
            <tr>
                <td>Spinning Aeróbico</td>
                <td>Paola Vives</td>
                <td>6pm-8pm</td>
                <td>Martes, Jueves y Viernes</td>
            </tr>
        </table>
    </div>
    <div id="contacto">
        <h2>CONTÁCTANOS</h2>
        <hr class="hr2"><br>
        <div class="parte1">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14898.462073829736!2d-89.66693366044923!3d21.008043799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f5674718d9786a7%3A0xe388dc56694a8be2!2sSpinning%20Chenku!5e0!3m2!1ses-419!2smx!4v1654130013249!5m2!1ses-419!2smx" width="550" height="425" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="parte2">
            <form action="enviar_mailer.php" method="post" name="formulario">
                <label for="">Nombre*: </label><input type="text" name="nombre" id=""><br><br>
                <label for="">Apellido: </label><input type="text" name="apellido" id=""><br><br>
                <label for="">Teléfono*:</label><input type="tel" name="telefono" id=""><br><br>
                <label for="">Correo Electrónico*:</label><input type="email" name="email" id=""><br><br>
                <label for="">Dudas o comentarios*:</label><br><br><textarea name="dudas" id="" cols="55" rows="10"></textarea><br><br>
                <input type="submit" value="Enviar" onclick="valida()" >
            </form>
        </div>
    </div>
    <div class="footer">
        <div class="info">
            <p>C. 19, Residencial del Nte, 97219 Mérida, Yuc.</p>
            <p>Tel.(999) 5741302</p>
        </div>
        <div class="redes">
            <img src="img/facebook.png" alt="">
        <img src="img/instagram.png" alt="">
        </div>
    </div>
</body>
</html>