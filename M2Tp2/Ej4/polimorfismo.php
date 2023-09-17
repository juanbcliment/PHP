<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
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



class CalcularSueldo extends Persona{
    public $trabajos;
    public function __construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad,  $puesto, $file, $trabajos){
        parent::__construct($nombre, $nacimiento, $direccion, $sexo, $disponibilidad,  $puesto, $file);
    $this->trabajos= $trabajos;
    }
    public function calcularSueldo(){
        if (isset($_POST['enter']) && !empty($_POST['enter'])) {
        $this->trabajos = $_POST['trabajos'];
        if($this->puesto === "informatica"){
           if($this->trabajos === 0){
            echo "El sueldo es de $200.000";
           }else if($this->trabajos <= 5 && $this->trabajos>0){
              $sueldo = 200000 + ($this->trabajos*10000);
              echo "El sueldo es de $sueldo";
           }else {
            $sueldo = 200000 + ($this->trabajos*20000);
              echo "El sueldo es de $sueldo";
           }
     
        }else if($this->puesto === "contable"){
            if($this->trabajos === 0){
                echo "El sueldo es de $100.000";
               }else if($this->trabajos <= 5 && $this->trabajos>0){
                  $sueldo = 100000 + ($this->trabajos*50000);
                  echo "El sueldo es de $sueldo";
               }else {
                $sueldo = 100000 + ($this->trabajos*80000);
                  echo "El sueldo es de $sueldo";
               }
        }else {
            if($this->trabajos === 0){
                echo "El sueldo es de $200.000";
               }else if($this->trabajos <= 5 && $this->trabajos>0){
                  $sueldo = 300000 + ($this->trabajos*20000);
                  echo "El sueldo es de $sueldo";
               }else {
                $sueldo = 300000 + ($this->trabajos*30000);
                  echo "El sueldo es de $sueldo";
               }
    
        }
    }
}
}

$calcularSueldo = new CalcularSueldo($_POST['nombre'],$_POST['nacimiento'],$_POST['direccion'],$_POST['sexo'],$_POST['tiempo'],$_POST['puesto'],$_POST['archivo'],$_POST['trabajos']);
$calcularSueldo->calcularSueldo();
?>
</body>
</html>
