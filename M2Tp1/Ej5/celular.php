<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <br><br><br>
<?php
class TelefonoCelular{
    private $marca;
    private $color;
    private $sistemaOperativo;
    private $numero;
    private $numeroLlamado;
    private $estado;
    private $haciendoLlamada;
    public function __construct( $numero, $numeroLlamado){
     
        $this->numero = $numero;
        $this->numeroLlamado = $numeroLlamado;
        $this->estado = "encendido";
        $this->haciendoLlamada = "no";
    }
    public function incorporarDatos($marca, $color, $sistemaOperativo, $estado, $haciendoLlamada){
        $this->marca = $marca;
        $this->color = $color;
        $this->sistemaOperativo = $sistemaOperativo;
        $this->estado = $estado;
        $this->haciendoLlamada = $haciendoLlamada;
    }
   public function hacerLamada($numero){
    if (isset($_POST['enter']) && !empty($_POST['enter'])) {
    if ($this->estado === "encendido" && $this->haciendoLlamada === "no"){
        $this->numeroLlamado = $numero;
        $this->haciendoLlamada = "si";
        echo $this->haciendoLlamada;echo " esta haciendo una llamada <br>";
    }else{
      
        echo $this->haciendoLlamada;echo " esta haciendo una llamada<br>";
    }
    
}
   }
   public function terminarLlamada(){
    if (isset($_POST['enter']) && !empty($_POST['enter'])) {
    if ($this->estado === "encendido" && $this->haciendoLlamada === "si"){
        $this->numeroLlamado = "";
        $this->haciendoLlamada = "no";
        echo $this->haciendoLlamada;echo " esta haciendo una llamada<br>";
    }else{
        echo "el celular esta apagado";echo "<br>";
        echo $this->haciendoLlamada;echo " esta haciendo llamada <br>";
    }
}
   }
   public function apagarCelular(){
    if (isset($_POST['enter']) && !empty($_POST['enter'])) {
    if($this->estado === "encendido"){
        $this->estado = "apagado";
    $this->haciendoLlamada = "no";
    echo "El celular esta ";echo $this->estado; echo "<br>";
    }else{
        echo "No se puede apagar";echo "<br>";
        echo "El celular esta ";echo $this->estado; echo "<br>";
    }
    
    }
   }
   public function ecenderCelular(){
    if (isset($_POST['enter']) && !empty($_POST['enter'])) {
    if ($this->estado === "apagado"){
        $this->estado = "encendido";
        echo "El celular esta ";echo $this->estado; echo "<br>";
      
    }else{
        echo "el celular ya esta enecendido";echo "<br>";
        echo "El celular esta ";echo $this->estado; echo "<br>";
        
    }
}
   }
   public function getEstado(){
    if (isset($_POST['enter']) && !empty($_POST['enter'])) {
    echo "El celular esta ";echo $this->estado; echo "<br>";
   }
}
}

$celular1 = new TelefonoCelular($_POST["numero"],$_POST["llamarcelular"]);
$celular1->incorporarDatos($_POST["marca"], $_POST["color"], $_POST["so"], $_POST["estado"], $_POST["llamada"]);
$celular1->hacerLamada($_POST["llamarcelular"]);
$celular1->terminarLlamada();
$celular1->ecenderCelular();
$celular1->apagarCelular();
$celular1->getEstado();



$celular2 = new TelefonoCelular($_POST["numero"],$_POST["llamarcelular"]);
$celular2->hacerLamada($_POST["numero"]);
$celular2->getEstado();
?>
</body>
</html>
