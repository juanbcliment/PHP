
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 </title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <br><br><br>
    
<?php

class Cabecera {
    private $titulo;
    private $alineacion;
    private $colorTexto;
    private $colorFondo;
    public function __construct($titulo, $alineacion, $colorTexto, $colorFondo) {
        $this->titulo = $titulo;
        $this->alineacion = $alineacion;
        $this->colorTexto = $colorTexto;
        $this->colorFondo = $colorFondo;
    }
    public function graficar() {
        echo '<div style="font-size: 40px; text-align:' . $this->alineacion .'; color:'. $this->colorTexto .'; background-color:'. $this->colorFondo.'">'. $this->titulo .' </div>';
    }
    public function getID(){
        echo $this->titulo;
        echo $this->alineacion;
        echo $this->colorFondo;
        echo $this->colorTexto;
    }
}


$cabecera = new Cabecera($_POST['titulo'], $_POST['centrar'], $_POST['colorTexto'], $_POST['colorFondo']);
$cabecera->graficar(); 
?>
</body>
</html>