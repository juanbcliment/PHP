<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 y 3</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <br><br><br>
<?php
class Persona{
    protected $nombre;
    protected $nacimiento;
    protected $direccion;
    protected $sexo;
    protected $disponibilidad;
    protected $puesto;
    protected $file;
    public function __construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad, $puesto, $file){
        $this->nombre = $nombre;
        $this->nacimiento = $nacimiento;
        $this->direccion = $direccion;
        $this->sexo = $sexo;
        $this->disponibilidad = $disponibilidad;
        $this->puesto = $puesto;
        $this->file = $file;
    }
} 
class Postulante extends Persona{

public function edad(){
    if (isset($_POST['nacimiento']) && !empty($_POST['nacimiento'])) {
    $anio = new DateTime($this->nacimiento);
    $ahora = new DateTime(date("Y-m-d"));
    $diferencia = $ahora->diff($anio);
    $respuesta = $diferencia->format("%y");
    echo $this->nombre . " tiene $respuesta años"; echo "<br><br>";
}
}
}

class Empleado extends Persona{
    protected $fechaDeIngreso;
public function __construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad,  $puesto, $file, $fecha){
    parent::__construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad,  $puesto, $file);
$this->fechaDeIngreso = $fecha;
}
public function antiguedad(){
    if (isset($_POST['ingreso']) && !empty($_POST['ingreso'])) {
        
    $anio = new DateTime($this->fechaDeIngreso);
    $ahora = new DateTime(date("Y-m-d"));
    $diferencia = $ahora->diff($anio);
    $respuesta = $diferencia->format("%y");
   
    echo $this->nombre . " tiene $respuesta de antiguedad "; echo "<br><br>";
    
    }
}
public static function puestos(){  
    if (isset($_POST['herencia']) && !empty($_POST['herencia'])) {
        echo "Los puestos existentes son:" . "<br>";
    echo "Informatica". "<br>";
    echo "Contable". "<br>";
    echo "RRHH";
    }
}
}


$postulante = new Postulante($_POST['nombre'],$_POST['nacimiento'],$_POST['direccion'],$_POST['sexo'],$_POST['tiempo'],$_POST['puesto'],$_POST['archivo']);
$empleado = new Empleado($_POST['nombre'],$_POST['nacimiento'],$_POST['direccion'],$_POST['sexo'],$_POST['tiempo'],$_POST['puesto'],$_POST['archivo'],$_POST['ingreso']);
$postulante->edad();
$empleado->antiguedad();
Empleado::puestos();
?>
</body>
</html>
