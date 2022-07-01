<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <link rel="stylesheet" href="http://localhost/proyecto/styles.css">
</head>
<body>
    <div class="imagen_registro">
        <img class="imagen_registro2" src="img/registro.jpg" alt="">
    </div>
    <div class="formulario">
        <h2>Crea tu cuenta</h2>
        <form action="guardar_usuario.php" method="POST" name="formulario">
            <label for="">Nombre de usuario:&nbsp&nbsp&nbsp&nbsp</label><input type="text" name="usuario" id=""><br><br>
            <label for="">Correo electrónico:&nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="email" name="email" id=""><br><br>
            <label for="">
                Escoge tu paquete:&nbsp&nbsp&nbsp
                <select class="seleccion" name="paquete" id="">
                    <option value="" disabled selected>Seleccione un paquete</option>
                    <option value="premium">Premium</option>
                    <option value="platino">Platino</option>
                    <option value="clasico">Clásico</option>
                </select><br><br>
            </label>
            <label for="">Contraseña: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label><input type="password" name="contrasena" id=""><br><br><br>
            <a class="iniciar" href="iniciarsesion.php">Iniciar Sesión</a>
            <input type="submit" value="Registrarme"><br><br>
        </form>
    </div>
</body>
</html>