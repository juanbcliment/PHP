<?php include 'postulante.php'; ?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
  <h3>Ejercicio 1 Modulo 2 Tp 2</h3>
  <p>Cargar a través de un formulario los datos de un postulante para un puesto
de trabajo. Los datos son los siguientes:</p>
<li>Nombre y Apellido</li>
<li>Fecha de nacimiento</li>
<li>Dirección</li>
<li>Sexo</li>
<li>Disponibilidad (medio tiempo o full time)</li>
<li>Puesto (informática, contable, rrhh)</li>
<li>Cargar CV (archivo de cualquiera de los 3 tipos: .pdf, .doc, .jpg)</li>
<p>Al enviar el formulario, mostrar por pantalla un mensaje de confirmación:</p>
<p>“El postulante [Nombre y Apellido] se inscribió en el puesto [Puesto]“.</p>
    <form action="postulante.php" method="post">
      <input type="text" name="nombre"><label for="">Nombre y Apellido</label><br>
      <input type="date" name="nacimiento"><label for="">Fecha de nacimiento</label><br>
      <input type="text" name="direccion"><label for="">Direccion</label><br>
      <p>Sexo</p>
      <input type="radio" name="sexo" value="Masculino"><label for="">Masculino</label>
      <input type="radio" name="sexo" value="Femenino"><label for="">Femenino</label><br>
      <p>Dsiponibilidad</p>
      <input type="radio" name="tiempo" value="parTime"><label for="">Part Time</label>
      <input type="radio" name="tiempo" value="fullTime"><label for="">Full Time</label><br>
      <p>Puesto</p>
       <select name="puesto" >
        <option value="Informatica">Informatica</option>
        <option value="Contable">Contable</option>
        <option value="RRHH">RRHH</option>
      </select><br><br>
     <input type="file" name="archivo" ><label for="">CV</label>  
    <input type="submit" value="enviar">
    </form>
</body>
</html>