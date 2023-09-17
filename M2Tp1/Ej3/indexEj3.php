<?php include 'cabecera.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h3>Ejercicio 3 Modulo 2 Tp 1</h3>
    <p>Crear la clase CabeceraPagina que permita mostrar un título, indicarle si
queremos que aparezca centrado, a derecha o izquierda, además permitir definir
el color de fondo y de la fuente.</p>
<p>Pasar los valores que cargaran los atributos
mediante un constructor.</p>
    <form action="cabecera.php" method="post">
        <input type="text" name="titulo"><label for="">Ingrese Titulo</label><br><br>
        <p>Alineacion de texto</p>
        <select name="centrar">
            <option value="center">Centrar</option>
            <option value="left">Izquierda</option>
            <option value="right">Derecha</option>
        </select><br><br>
        <p>Color de Fondo</p>
        <select name="colorFondo">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="blueviolet">Violeta</option>
            <option value="wheat">Beige</option>
            <option value="white">Blanco</option>
            <option value="black">Negro</option>
        </select><br><br>
        <p>Color de Texto</p>
        <select name="colorTexto">
            <option value="red">Rojo</option>
            <option value="blue">Azul</option>
            <option value="blueviolet">Violeta</option>
            <option value="wheat">Beige</option>
            <option value="white">Blanco</option>
            <option value="black">Negro</option>
        </select><br><br>
        <input type="submit" name="Enter">
    </form>
    

</body>

</html>