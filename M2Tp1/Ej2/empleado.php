<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <br><br><br>
    <?php
class Empleado{
    private $nombre;
    private $sueldo;
    public function setName($name){
        return $this->nombre = $name ;
    }
    public function setSalary($salary){
        return $this->sueldo = $salary;
    }
     public function impuesto(){
        echo $this->nombre;
        if($this->sueldo > 45000){
            echo " Tiene que pagar impuesto";
        }else {

            echo " No tiene que pagar impuestos";
        }
     }
}

$empleado = new Empleado();
$empleado->setName($_POST['nombre']);
$empleado->setSalary($_POST['sueldo']);
$empleado->impuesto();
?>
</body>
</html>
