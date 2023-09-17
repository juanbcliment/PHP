<?php include 'empleado.php'; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <h3>Ejercicio 2 Modulo 2</h3>

    <p>2. Crear la clase Empleado y definir como atributos su nombre y sueldo. Como así
también un método inicializar que reciba como dato el nombre y sueldo.</p>
<p>También
plantear un segundo método que imprima el nombre y un mensaje si debe o no
pagar impuestos (si el sueldo supera a 45.000 paga impuestos)</p>
    <form action="empleado.php" method="post">
    <input type="text" name="nombre"><label for="">Nombre</label><br>
    <input type="number" name="sueldo"><label for="">Sueldo</label><br>
        <input type="submit" class="boton" name="punto2" value="Enter">
    </form>
</body>
</html>