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
class Alumno{
    private $nombreAlumno;
    private $nota1;
    private $nota2;
    private $nota3;
    private $nota4;
    private $notaFinal;
    public function __construct($nombreAlumno, $nota1, $nota2, $nota3, $nota4){
        $this->nombreAlumno = $nombreAlumno;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
        $this->nota4 = $nota4;
    }
    public function calcularNotaFinal(){
        if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
     $this->notaFinal = ($this->nota1*0.15 + $this->nota2*0.2 + $this->nota3*0.25 + $this->nota4*0.4);
     echo $this->nombreAlumno . " tiene de nota final " . $this->notaFinal;
     
        }
    }
}

$alumno = new Alumno($_POST['nombre'],$_POST['nota1'],$_POST['nota2'],$_POST['nota3'],$_POST['nota4']);
$alumno->calcularNotaFinal();
?>
</body>
</html>