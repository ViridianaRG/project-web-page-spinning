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
            <h2>INSCRIPCIONES</h2>
            <?php
                require "conexion.php";
                $todos_usuarios = "SELECT * FROM clases ORDER BY id_clase ASC";
                $resultado = mysqli_query($conectar,$todos_usuarios);
                while($row = mysqli_fetch_assoc($resultado)){
            ?>
                <p><img src="<?php echo $row["foto"];?>" class="imagen"></p>
                <p>Nombre: <?php echo $row["usuario"]; ?></p>
                <p>Apellido: <?php echo $row["apellido"]; ?></p>
                <p>Télefono: <?php echo $row["telefono"]; ?></p>
                <p>Clase inscrita: <?php echo $row["clase"]; ?></p>
                <p><a class="eliminar" href="#" onClick="validar('eliminar.php?id_clase=<?php echo $row['id_clase']; ?>')">Eliminar</a></p>
            <?php
            }
            mysqli_free_result($resultado)
            ?>
	</div>
    </div>
    <?php
		include "footer.php";
	?>
    <script>
        function validar(url)
        {
            var eliminar = confirm("¿Realmente deseas ELIMINAR LA CLASE?");
            if(eliminar==true){
            window.location=url;
            }
        }
    </script>
</body>
</html>