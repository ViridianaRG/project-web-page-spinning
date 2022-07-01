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
		<iframe width="560" height="315" src="https://www.youtube.com/embed/h5lsIHUo698" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			<p>Aquí podrás inscribirte a las clases y checar las clases a las cuales estás inscrito</p>
		</div>
	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>
