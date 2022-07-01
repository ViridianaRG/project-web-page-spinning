<?php
require "conexion.php";

$usuario = $_POST["usuario"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];
$paquete = $_POST["paquete"];

$insertar = "INSERT INTO usuarios (usuario,contrasena,email,paquete) VALUES ('$usuario','$contrasena',
'$email', '$paquete')";

$query=mysqli_query($conectar, $insertar);


if($query){
    echo"
    <script>
    alert('DATOS GUARDADOS CORRECTAMENTE');
    location.href = 'registro.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('NO SE GUARDARON LOS DATOS');
    location.href = 'registro.php';
    </script>
    ";
}
?>