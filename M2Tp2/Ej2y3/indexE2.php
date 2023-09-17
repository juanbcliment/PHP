<?php include 'herencia.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 y 3</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<body>
<h3>Ejercicio 2 y 3 Modulo 2 Tp 2</h3>
<p>2. Usando herencia realice dos clases una Postulante y la otra Empleado, que
hereden de la clase Persona. </p>
<p>● Los datos de la clase Postulante son los mismos que se ingresan por
formulario en el punto 1.</p>
<p>○ Esta clase debe permitir calcular la edad del postulante.</p>
<p>● Los datos que se guardan de la clase Empleado son:</p>
<li>Nombre y Apellido</li>
<li>Fecha de nacimiento</li>
<li>Dirección</li>
<li>Sexo</li>
<li>Disponibilidad (medio tiempo o full time)</li>
<li>Puesto (informática, contable, rrhh)</li>
<li>Fecha de ingreso</li>
<li>Esta clase debe permitir calcular los años de antigüedad del empleado</li>
<br>
<p>3. Agregue un método estático a la clase Empleado del punto anterior que
permita mostrar los puestos existentes (informática, contable, rrhh). Muestre por
pantalla el resultado de ejecutar dicho método.</p>
<br>
  <form action="herencia.php" method="post">
<input type="text" name="nombre"><label for="">Nombre y Apellido</label><br>
<input type="date" name="nacimiento"><label for="">Fecha de nacimiento</label><br>
<input type="text" name="direccion"><label for="">Direccion</label><br>
<input type="radio" name="sexo" value="Masculino"><label for="">Masculino</label>
<input type="radio" name="sexo" value="Femenino"><label for="">Femenino</label><br>
<p>Dsiponibilidad</p>
<input type="radio" name="tiempo" value="parTime"><label for="">Part Time</label>
<input type="radio" name="tiempo" value="fullTime"><label for="">Full Time</label><br>
<p>Puesto</p>
<select name="puesto" >
  <option value="informatica">Informatica</option>
  <option value="contable">Contable</option>
  <option value="rrhh">RRHH</option>
</select><br>
<input type="date" name="ingreso"><label for="">Fecha de Ingreso</label><br>
<input type="file" name="archivo" ><label for="">CV</label><br><br>
<input type="submit" name="herencia" value="enviar">
</form>
</body>
</html>