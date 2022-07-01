<?php
require "conexion.php";

$usuario = $_POST["usuario"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$clase = $_POST["clase"];

$clases = implode(",", $clase);

$rutaenservidor='fotos';
$rutatemporal=$_FILES['imagen']['tmp_name'];
$nombreimagen=$_FILES['imagen']['name'];

date_default_timezone_set('UTC');
$nombreimagenunico = date('Y-m-d-h-i-s')."-".$nombreimagen;
$rutadestino = $rutaenservidor."/".$nombreimagenunico;

move_uploaded_file($rutatemporal,$rutadestino);

$insertar = "INSERT INTO clases (usuario,apellido,telefono,foto,clase) VALUES ('$usuario','$apellido',
'$telefono', '$rutadestino', '$clases')";

$query=mysqli_query($conectar, $insertar);


if($query){
    echo"
    <script>
    alert('DATOS GUARDADOS CORRECTAMENTE');
    location.href = 'registro_clases.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('NO SE GUARDARON LOS DATOS');
    location.href = 'registro_clases.php';
    </script>
    ";
}
?>