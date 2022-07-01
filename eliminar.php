<?php 
include "conexion.php";
$id_clase = $_GET['id_clase'];

//echo $id_cliente;

$consulta = "DELETE FROM clases WHERE id_clase = '$id_clase'";

$resultado = mysqli_query($conectar, $consulta);

if($resultado){
    echo'
    <script>
    alert("SE ELIMINO EL REGISTRO CORRECTAMENTE");
    location.href = "inscripciones.php";
    </script>
    ';
}
?>