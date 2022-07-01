<?php

include "phpmailer/PHPMailerAutoload.php";

$mail = new PHPMailer;

$mail->isSMTP();       
$mail->Host = 'smtp.gmail.com'; 
$mail->Port = 587;   
$mail->SMTPAuth = true;  
$mail->SMTPSecure = 'tls';  
$mail->Username = 'correodesdedondevasalir@gmail.com';   
$mail->Password = 'contraseña';  

$mail->setFrom('correodesdedondevasalir@gmail.com', 'NOMBRE DESDE DONDE VA A SALIR EL CORREO');
$mail->addAddress('correoaquienvallegar@hotmail.com', 'Viridiana Ramayo');     // Add a recipient
$mail->addReplyTo('correodesdedondevasalir@gmail.com', 'NOMBRE DESDE DONDE VA A SALIR EL CORREO');

$mail->isHTML(true);   

$mail->Subject = 'Enviado por'.$_POST['nombre'];
$mail->Body    = '<b>Nombre: </b>'.$_POST['nombre'].'<br><b>Apellido: </b>'.$_POST['apellido'].'<br><b>Teléfono: </b>'.$_POST['telefono'].'<br><b>Comentarios: </b>'.$_POST['dudas'];


if(!$mail->send()) {
    echo 'Algo salio mal intentalo de nuevo';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {

    echo '
    <script>
      alert("Gracias por contactarnos, nosotros nos comunicamos contigo a la brevedad.");
      location.href="index.php";
    </script>
  ';
    echo 'Gracias '.$_POST['nombre'].' por contactarnos, nosotros nos comumnicamos contigo a la brevedad.';
}

?>