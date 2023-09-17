<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP Numero 3</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap');

    body {
      background-image: url('https://images.alphacoders.com/897/897306.jpg');
    }

    h3 {
      color: #FCFCF5;
      font-family: 'roboto';
      margin-left: 20px;
    }

    h4 {
      color: #FA552D;
      font-family: 'roboto';
      margin-left: 70px;

    }

    input {
      background-color: #FCFCF5;
    }

    .boton {
      font-family: 'roboto';
      text-align: center;
      background-color: #1259c3;
      color: white;
      border: none;
      border-radius: 8px;
      height: 22px;
      font-size: 14px;
      cursor: pointer;
      transition: all 300ms;
    }

    .boton:hover {
      background-color: #0022AA;
    }

    .inputForm {
      background: white;
      color: #c6c6c6;
      border: 1px solid;
      margin-right: 5px;
      width: 100px;
      border-radius: 5px;
      border-bottom: 1px solid var(--colorTextos);
      height: 20px;

    }

    .inputForm:focus {
      outline: none;
      color: #5e5d5d;
    }

    .resultado {
      color: #4AE341;
      margin-left: 70px;
    }

    div {
      margin-left: 70px;
    }

    .center {
      text-align: center;
      color: #FCFCF5;
      font-family: 'roboto';
    }

    /*      Agregue todo el codigo de style en el mismo html para no tener que comprimirlo, y que ustedes 
          lo tengan que estar descomprimiendo */
  </style>
</head>

<body>
  <h2 class="center">FUNCIONES EN PHP</h2>
  <h3 class="center">Alumno: Juan Bautista Climent || Dni: 39077028 || Modulo 1 || Comisión 3 </h3>
  <br>
  <h3>1. Realizar una función que acepte dos números y devuelva el producto de ambos.
    Cargar los dos valores a través de un formulario.
  </h3>
  <div>
    <form action="" method="post">
      <input class="inputForm" type="number" name="num1">
      <input class="inputForm" type="number" name="num2">
      <input class="boton" type="submit" name="multi" value="Multiplicar">
    </form>
  </div>
  <?php
  if ((isset($_POST['multi']) && !empty($_POST['multi']))) {
    if ((isset($_POST['num1']) && !empty($_POST['num1'])) && (isset($_POST['num2']) && !empty($_POST['num2']))) {
      $valor1 = $_POST['num1']; // MUY IMPORTANTE POST EN MAYUSCULA
      $valor2 = $_POST['num2'];

      function multi($a, $b)
      {
        $resultado = $a * $b; ?>
        <h4 class="resultado">La multiplicación de <?php echo "$a * $b" ?> es: <?php echo $resultado ?></h3>
        <?php
      }
      multi($valor1, $valor2);
    } else { ?>
        <h4>Error!! Complete con dos numeros</h4>
    <?php
    }
  }
    ?>

    <h3>2. Realizar una función que permita determinar si un número pasado como
      parámetro, es par o impar.
    </h3>
    <div>
      <form action="" method="post">
        <input class="inputForm" type="number" name="num3">
        <input class="boton" type="submit" name="parImp" value="Par o Impar">
      </form>
    </div>
    <?php
    if (isset($_POST['parImp']) && !empty($_POST['parImp'])) {
      if ((isset($_POST['num3']) && !empty($_POST['num3']))) {
        $valorEj2 = $_POST['num3'];
        function parImpar($num)
        {
          if ($num % 2 == 0) { ?>
            <h4 class="resultado">El numero <?php echo $num ?> es Par</h3>
            <?php
          } else { ?>
              <h4 class="resultado">El numero <?php echo $num ?> es Impar</h3>
            <?php
          }
        }
        parImpar($valorEj2);
      } else { ?>
            <h4>Error!! Inserte un numero</h4>
        <?php
      }
    }
        ?>

        <h3>3. Realizar una función que acepte un número, y retorne la suma de todos los
          números inferiores a él, incluido dicho número. Por ejemplo, si el número
          ingresado es 5, deberá devolver: 1+2+3+4+5
        </h3>
        <div>
          <form action="" method="post">
            <input class="inputForm" type="number" name="num4">
            <input class="boton" type="submit" name="sumaNum" value="Suma">
          </form>
        </div>
        <?php
        if (isset($_POST['sumaNum']) && !empty($_POST['sumaNum'])) {
          if ((isset($_POST['num4']) && !empty($_POST['num4']))) {
            $valorEj3 = $_POST['num4'];
            function devuelve($num)
            {
              $suma = 0;
              for ($i = 0; $i <= $num; $i++) {

                $suma += $i;
              } ?>
              <h4 class="resultado">La suma de los numeros inferiores es: <?php echo $suma ?></h3>
              <?php
            }
            devuelve($valorEj3);
          } else { ?>
              <h4>Error!! Inserte un numero</h4>
          <?php
          }
        }
          ?>

          <h3>4. Desarrollar una función que acepte una cadena de caracteres y la convierta en
            mayúscula.</h3>
          <div>
            <form action="" method="post">
              <input class="inputForm" type="text" name="texto">
              <input class="boton" type="submit" name="mayus" value="Mayuscula">
            </form>
          </div>
          <?php
          if (isset($_POST['mayus']) && !empty($_POST['mayus'])) {
            if ((isset($_POST['texto']) && !empty($_POST['texto']))) {

              $texto = $_POST['texto'];
              if (!is_numeric($texto)) {

                function mayuscula($dato)
                {
                  $mayuscu = strtoupper($dato); ?>
                  <h4 class="resultado"> <?php echo $dato ?> en mayuscula es: <?php echo $mayuscu ?></h3>
                  <?php
                }
                mayuscula($texto);
              } else { ?>
                  <h4>Error!! Ingrese solo letras</h4>
                <?php
              }
            } else { ?>
                <h4>Error!! Inserte la o las palabras</h4>
            <?php
            }
          }
            ?>

            <h3>5. Realizar una función que acepte el lado de un cuadrado y calcule su perímetro y
              su superficie (No imprimir dentro de la función).
              IMPORTANTE</h3>
            <div>
              <form action="" method="post">
                <input class="inputForm" type="number" name="lado">
                <input class="boton" type="submit" name="cuad" value="Cuadrado">
              </form>
            </div>
            <?php
            if (isset($_POST['cuad']) && !empty($_POST['cuad'])) {
              if ((isset($_POST['lado']) && !empty($_POST['lado']))) {
                $ladoCuadrado = $_POST['lado'];
                function cuadrado($num)
                {
                  $perimetro = $num * 4;
                  $superficie = $num * $num;
                  return [$superficie, $perimetro];
                }
                list($superficie, $perimetro) = cuadrado($ladoCuadrado);
            ?>
                <h4 class="resultado">La superficie de un cuadrado con lado <?php echo $ladoCuadrado ?> es: <?php echo $superficie; ?></h4>
                <h4 class="resultado">El perimetro de un cuadrado con lado <?php echo $ladoCuadrado ?> es: <?php echo $perimetro; ?></h4>
              <?php
              } else { ?>
                <h4>Error!! Inserte el lado de un cuadrado</h4>
            <?php

              }
            }
            ?>
            <br>
</body>

</html>