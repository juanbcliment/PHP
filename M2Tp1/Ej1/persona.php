
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
       <link rel="stylesheet" href="../style.css">
</head>
<body>
    <br><br><br>
    <?php
 class Persona{
    private $nombre;
    private $apellid;
    private $edad;
     
    public function setName($name){
         return $this->nombre = $name;
    }
    public function setLastName($lastName){
        return $this->apellid = $lastName;
    }
    public function setAge($edad){
        return $this->edad = $edad;
    }
    public function nameMin(){
        echo strtolower($this->nombre);
    }

    public function primLetraMayu(){
        echo ucfirst($this->apellid);
    }
 }; 
 $persona = new Persona();
  
 $persona->setName($_POST['nombre']);
 $persona->setLastName($_POST['apellido']);
 ?>
 <p>Nombre en minuscula:</p>
 <?php
 $persona->nameMin();echo "<br>";
  ?>
 <p>Nombre con primera letra en mayuscula:</p>
 <?php
 $persona->primLetraMayu(); 
 ?>
</body>
</html>
