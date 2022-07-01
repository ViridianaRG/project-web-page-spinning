<?php
	require "conexion.php";

	$usuario = $_POST["usuario"];
	$contrasena = $_POST["contrasena"];
	
	$comparar = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contrasena = '$contrasena'";

	$resultado = mysqli_query($conectar, $comparar);

	if(mysqli_num_rows($resultado)>0){
		session_start();
		$_SESSION['autentificado'] = "SI";
		header("Location:panel.php");
	}else{
		echo "
		<script>
			alert('USUARIO O CONTRASEÑA INCORRECTOS');
			location.href = 'iniciarsesion.php?errorusuario=SI';
		</script>
		";
	}
	mysqli_free_result($resultado);
	mysqli_close($conectar);
?>