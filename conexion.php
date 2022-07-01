<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $bd = "spinning";

    $conectar = mysqli_connect($host,$user,$pass,$bd);

    if(!$conectar){
        echo "No se pudo conectar a la Base de Datos";
    }

    ?>