<?php
	include "seguridad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel</title>
    <link rel="stylesheet" href="http://localhost/proyecto/styles.css">
</head>
<body>
    <div class="encabezado">
		<h1>BIENVENIDO</h1>
	</div>
	<div class="imagenes">
		<div class="imagen1">
			<img src="img/panel1.jpg" alt="">
		</div>
		<div class="imagen2">
			<img src="img/panel2.jpg" alt="">
		</div>
		<div class="imagen3">
			<img src="img/panel3.jpg" alt="">
		</div>
	</div>
	<div class="padre">
		<div class="navegacion">
			<ul>
				<li><a class="enlaces" href="panel.php">Inicio</a></li>
				<li><a class="enlaces" href="registro_clases.php">Registro a clases</a></li>
				<li><a class="enlaces" href="inscripciones.php">Inscripciones</a></li><br><br>
				<li><a class="salir" href="salir.php">Cerrar Sesión</a></li>
			</ul>
			
		</div>
		<div class="contenido">
            <h2>FORMULARIO</h2>
            <form action="guardar_clase.php" method="POST" name="formulario" enctype="multipart/form-data">
            <label for="">Nombre de usuario:&nbsp&nbsp&nbsp&nbsp</label><input type="text" name="usuario" id=""><br><br>
            <label for="">Apellido:&nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="text" name="apellido" id=""><br><br>
            <label for="">Télefono:&nbsp&nbsp&nbsp&nbsp</label><input type="tel" name="telefono" id=""><br><br>
            <label for="">Ingrese su foto:&nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="file" name="imagen" id=""><br><br>
            <label for="">
                Escoge tu clase:&nbsp&nbsp&nbsp
                <table>
            <tr>
                <th>Clases</th>
                <th>Instructor</th>
                <th>Horario</th>
                <th>Días</th>
                <th>Inscripcion</th>
            </tr>
            <tr>
                <td>Spinning HIT</td>
                <td>Carlos Herrera</td>
                <td>7am-9am</td>
                <td>Lunes, Miércoles y Sábado</td>
                <td><input type="checkbox" name="clase[]" value="Clase: Spinning HIT, Instructor: Carlos Herrera, Horario: 7am-9am, Días: Lunes, Miércoles y Sábado" id=""></td>
            </tr>
            <tr>
                <td>Spinning Fuerza</td>
                <td>Rafael López</td>
                <td>10am-12pm</td>
                <td>Lunes, Martes, Jueves y Sábado</td>
                <td><input type="checkbox" name="clase[]" value="Clase: Spinning Fuerza, Instructor: Rafael López, Horario: 10am-12pm, Días: Lunes, Martes, Jueves y Sábado" id=""></td>
            </tr>
            <tr>
                <td>Spinning Resistencia</td>
                <td>Julissa Sierra</td>
                <td>2pm-4pm</td>
                <td>Lunes, Miércoles y Viernes</td>
                <td><input type="checkbox" name="clase[]" value="Clase: Spinning Resistencia, Instructor: Julissa Sierra, Horario: 2pm-4pm, Días: Lunes, Miércoles y Viernes" id=""></td>
            </tr>
            <tr>
                <td>Spinning Aeróbico</td>
                <td>Paola Vives</td>
                <td>6pm-8pm</td>
                <td>Martes, Jueves y Viernes</td>
                <td><input type="checkbox" name="clase[]" value="Clase: Spinning Aeróbico
                , Instructor: Paola Vives, Horario: 6pm-8pm, Días: Martes, Jueves y Viernes" id=""></td>
            </tr>
        </table>
            </label>
            <input class="boton" type="submit" value="Inscribirse">
        </form>
		</div>
	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>