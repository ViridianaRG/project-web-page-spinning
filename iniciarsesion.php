<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="http://localhost/proyecto/styles.css">
</head>
<body>
    <div class="formulario">
        <h2>Iniciar Sesión</h2>
        <form action="autentificacion.php" method="post">
            <label for="">Nombre de usuario:&nbsp&nbsp&nbsp&nbsp</label><input type="text" name="usuario" id="" required><br><br>
            <label for="">Contraseña: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="password" name="contrasena" id="" required><br><br>
            <a class="iniciar" href="registro.php">Registrarme</a>
            <input type="submit" value="Iniciar Sesión"><br><br>
        </form>
    </div>
</body>
</html>