<?php include 'persona.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h3>Ejercicio 1 Modulo 2 Tp 1</h3>
    <p>Crear la clase Persona con las siguientes propiedades:</p>
    <p>Nombre</p>
    <p>Apellido</p>
    <p>Edad</p>
    <p>y siguientes métodos:</p>
    <p>● setName, que debe permitir que la propiedad nombre represente su
cadena de caracteres en minúscula.</p>
    <p>● getName, debe mostrar la cadena de caracteres antes ingresada con la
primer letra de cada palabra en mayúscula.</p>
    <br>
    <form action="persona.php" method="post">
    <input type="text" name="nombre"><label for="">Nombre</label><br>
    <input type="text" name="apellido"><label for="">Apellido</label><br>
    <input type="number" name="edad"><label for="">Edad</label><br>
        <input type="submit" class="boton" name="punto1" value="Enter">
    </form>

</body>
</html>