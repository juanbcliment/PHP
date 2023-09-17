<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../style.css">
</head>
<body>
  

<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
function Enviar(){
if (isset($_POST['enviar']) && isset($_POST['enviar'])){
  $nombre= $_POST['nombre'];
  $email= $_POST['mail'];
  $asunto = $_POST["asunto"];
  $archivo = $_POST["archivo"];


$mail = new PHPMailer(true);
try {
    //Server settings
                   
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';  //se modifico con hotmail                    //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '';                     //SMTP username
    $mail->Password   = '';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('juancliment007@gmail.com', $nombre);
    $mail->addAddress($email);     //Add a recipient
  
   
  /*   //Attachments
    $mail->addAttachment('///home/goodvibes/Escritorio/progra/CV-JuanBCliment.pdf', 'CV-JuanBCliment.pdf');         //Add attachments
  /*   $mail->addAttachment('CV-JuanBCliment.pdf', 'CV-JuanBCliment.pdf');    //Optional name */
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Argentina Programa 2023';
    $mail->Body    = $asunto;
   /*   $mail->addAttachment($archivo); */  
   /*  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; */

    $mail->send();
    ?>
    <p class="resultado">El Mensaje se envio correctamente</p>
    <?php
} catch (Exception $e) {
  ?>
    <p class="error"> <?php echo "Error al enviar mensaje: {$mail->ErrorInfo}"; ?></p>
    <?php
   
}
}
}
?>
</body>
</html>