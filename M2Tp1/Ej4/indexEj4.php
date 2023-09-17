<?php include 'notas.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h3>Ejercicio 4 Modulo 2 Tp 1</h3>
    <p>Crear un programa que permita obtener 4 notas, el nombre del alumno y calcular
la nota final teniendo en cuenta los siguientes porcentajes.</p>
<p>Nota 1…..15%</p>
<p>Nota 2…..20%</p>
<p>Nota 3…..25%</p>
<p>Nota 4…..40%</p>
<p>La sumatoria de los porcentajes de estas notas es igual a la nota final. La clase
debe estar estructurada de la siguiente manera:
Nombre de la clase: Alumno</p>
<p>Propiedades:
● nombreAlumno
● nota1
● nota2
● nota3
● nota4
● notaFinal
Metodos:
● calcularNotaFinal() </p>

    <form action="notas.php" method="post">
        <input type="text" name="nombre"><label for="">Nombre</label><br>
        <input type="number" name="nota1"><label for="">Nota 1</label><br>
        <input type="number" name="nota2"><label for="">Nota 2</label><br>
        <input type="number" name="nota3"><label for="">Nota 3</label><br>
        <input type="number" name="nota4"><label for="">Nota 4</label><br>
        <input type="submit" name="Enter">
    </form>
    

</body>

</html>