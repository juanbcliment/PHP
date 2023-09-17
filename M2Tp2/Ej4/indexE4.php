
<?php include 'polimorfismo.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<h3>Ejercicio 4 Modulo 2 Tp 2</h3>
<p>Implementar el polimorfismo (varias formas de resolver un mismo método)
para calcular el sueldo de tres tipos de Empleados:</p>
<p>Empleado Informático:
Sueldo = $básico + $xcantidadAplicaciones</p>
<li>$básico = $200.000</li>
<li>1-5 aplicaciones = $10.000</li>
<li>6 o más aplicaciones = $20.000</li>
<p>Empleado de RRHH: Sueldo = $básico + $xcantidadProyectos</p>
<li>$básico = $300.000</li>
<li>1-5 proyectos = $20.000</li>
<li>6 o más proyectos = $30.000</li>
<p>Empleado Contable:
Sueldo = $básico + $xcantidadExpedientes</p>
<li>$básico = $100.000</li>
<li>1-5 expedientes = $50.000</li>
<li>6 o más expedientes = $80.000</li>
<br><br>
<form action="polimorfismo.php" method="post">
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
<input type="number" name="trabajos" id=""><label for="">Trabajaso realisados</label><br>
<input type="file" name="archivo" ><label for="">CV</label>
<input type="submit" name="enter" value="enviar">
</form>

</body>
</html>