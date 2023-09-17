<?php include('phpmailer.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHPMailer</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <form action="" method="post">
    <div class="form">
         <input class="inputForm" type="text" name="nombre" placeholder="Nombre y Apellido"><br>
         <input class="inputForm" type="email" name="mail" placeholder="Mail al que desea enviar"><br>
         <textarea class="inputFormBody" name="asunto" placeholder="Asunto"></textarea><br>
         <input class="inputFormArchivo" type="file" name="archivo"><br>
         <input type="submit" name="enviar">
         </div>
    </form>
   <p>
     <?php
       echo Enviar();
    ?>
   </p>
</body>
</html>