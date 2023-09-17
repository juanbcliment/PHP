<?php include 'celular.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h3>Ejercicio 5 Modulo 2 Tp 1</h3>
    
    <form action="celular.php" method="post">
    <select name="marca">
            <option value="apple">Apple</option>
            <option value="samsung">Samsung</option>
            <option value="xiaomi">Xiaomi</option>
            <option value="motorola">Motorola</option>
            <option value="redmi">Redmi</option>
        </select><br><br>
        <select name="color">
            <option value="black">Negro</option>
            <option value="blue">Azul</option>
        </select><br><br>
        <p>Sistema operativo</p>
        <input type="radio" name="so" value="android"><label for="">Android</label>
        <input type="radio" name="so" value="iphone"><label for="">Iphone</label><br><br>
        <input type="number" name="celular"><label for="">Celular</label><br>
        <input type="number" name="llamarcelular" id=""><label for="">Llamar a</label><br>
        <p>Estado</p>
        <input type="radio" name="estado" value="apagado"><label for="">Apagado</label>
        <input type="radio" name="estado" value="encendido"><label for="">Encendido</label><br>
         <p>Llamando</p>
         <input type="radio" name="llamada" value="si"><label for="">Si</label>
         <input type="radio" name="llamada" value="no"><label for="">No</label><br><br><br>
        <input type="submit" name="enter">
    </form>
    

</body>

</html>