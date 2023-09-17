<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    
<?php   
class Postulante{
private $nombre;
private $nacimiento;
private $direccion;
private $sexo;
private $disponibilidad;
private $puesto;
private $file;
public function __construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto, $file){
    $this->nombre = $nombre;
    $this->nacimiento = $nacimiento;
    $this->direccion = $direccion;
    $this->sexo = $sexo;
    $this->disponibilidad = $disponibilidad;
    $this->puesto = $puesto;
    $this->file = $file;
    if(isset($_POST['nombre']) && !empty($_POST['nombre'])){
    echo "El Postulante $this->nombre se inscribio al puesto $this->puesto";
    }
}

}
$empleado = new Postulante($_POST['nombre'],$_POST['nacimiento'],$_POST['direccion'],$_POST['sexo'],$_POST['tiempo'],$_POST['puesto'],$_POST['archivo']);
?>
</body>
</html>