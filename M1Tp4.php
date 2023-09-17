<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Numero 4</title>
    <style>
        
  @import url('https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@300&family=Roboto:wght@300&display=swap');

        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;400&display=swap');

        body {
            background-image: url('https://www.xtrafondos.com/wallpapers/espacio-moonbreaker-11001.jpg');
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

        p {
            color: #FCFCF5;
            font-family: 'roboto';
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
            width: 200px;
            border-radius: 5px;
            border-bottom: 1px solid var(--colorTextos);
            height: 20px;

        }
        .inputFormTexto{
            width: 400px;
            height: 25px;
            font-size: 20px;
            vertical-align: top;
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
        form{
            margin-left: 40px;
        }
        .preg{
            margin-left: 40px;
            font-size: 14px;
        }
        .resp{
            font-family: 'Asap Condensed', sans-serif;;
            margin-left: 40px;
            font-size: 25px;
        }
    </style>
</head>

<body>
    <h2 class="center">FUNCIONES INTERNAS PHP</h2>
    <h3 class="center">Alumno: Juan Bautista Climent || Dni: 39077028 || Modulo 1 || Comisión 3 </h3>
    <br>




    <h3>1. Recibir una cadena de caracteres en un formulario y:
        <p>a. Controlar que no posea más de 80 caracteres.</p>
        <p>b. Convertir toda la cadena a mayúsculas.</p>
        <p> c. Eliminar los espacios en blanco tanto al principio como al final.</p>
    </h3>

    <form action="" method="post">
        <input type="text" class="inputFormTexto" name="texto" maxlength="80"><!-- con maxlength limitamos el input a 80 caracteres -->
        <input class="boton" type="submit" name="punto1" value="Enter">
    </form>
    <?php

    if (isset($_POST['punto1']) && !empty($_POST['punto1'])) {
        if ((isset($_POST['texto']) && !empty($_POST['texto']))) {
            $texto = $_POST['texto'];
            $mayuscu = strtoupper(trim($texto));
    ?>
            <h4 class="resultado"><?php echo $mayuscu ?></h4>
        <?php

        } else { ?>
            <h4>Error!! Ingrese un texto</h4>
    <?php
        }
    }
    ?>

    <br>
    <br>
    <br>



    <h3>2. Indique la salida de la siguiente porción de código y explique paso a paso que es
        lo que se está haciendo:
    </h3>
    <p class="preg">
        < ?php</p>
            <p class="preg">$array1=array("#", "$" , "%" , "&" , "[" , "]" , "{" , "}" , "*" , "/" , "=" );</p>
            <p class="resp">Se crea un array con lo que queres reemplazar, en este caso array1</p>
            <p class="preg"> $array2="" ;</p>
            <p class="resp">Se crea array2 la variable que va a reemplazar los datos del array1, se pone "" por que queremos que se eliminen </p>
            <p class="preg">$calculo="$var=numero1/(numero2*numero3)";</p>
            <P class="resp">Tenemos una variable con una función matemática que tiene errores de signos, que se van a eliminar con str_replace</P>
            <p class="preg">$res=str_replace($array1, $array2, $calculo);</p>
            <p class="resp">Se crea la nueva variable reemplazando los datos deseables, en este caso array1 es lo que queremos sacar, array2 con lo que queremos reemplazar esos datos, y cálculo es lo que vamos a filtrar</p>
            <p class="preg">$res=substr($res, 1, 2);</p>
            <p class="resp">substr extrae los datos que queramos indicando las posiciones en el string</p>
            <p class="preg">?></p>
            <p class="resp">Asi y todo con los filtrados, calculo quedaria como un string varnumero1numero2numero3 con el primeros $res, el segundo $res la verdad no entiendo que quiere hacer eliminandoce asi mismo </p>
            <br>
            <br>





            <h3>3. Realizar la porción de código PHP que controle:
                <p>a. Entrada: juanperezcom.ar</p>
                <p>Mensaje de Salida: “e-mail incorrecto, no se encuentra el símbolo @”</p>
                <p>b. Entrada: @gmail.com.ar</p>
                <p> Mensaje de Salida: “e-mail incompleto, por favor corrija su email”</p>
            </h3>
            <form action="" method="post">
                <input type="text" class="inputForm" name="maill"><!-- si ponemos en type email en vez de text ya te filtra solo si esta correcto -->
                <input type="submit" class="boton" name="punto3" value="Enter">
            </form>

            <?php
            if (isset($_POST['punto3']) && !empty($_POST['punto3'])) {
                if ((isset($_POST['maill']) && !empty($_POST['maill']))) {
                    $mailIngresado = $_POST['maill'];
                    if (strpos($mailIngresado, '@')) {
                        if (filter_var($mailIngresado, FILTER_VALIDATE_EMAIL)) {
            ?>
                            <h4 class="resultado">El e-mail esta correcto</h4>
                        <?php
                        } else {
                        ?>
                            <h4>e-mail incompleto, por favor corrija su email</h4>
                        <?php

                        }
                    } else {
                        ?>
                        <h4>e-mail incorrecto, no se encuentra el símbolo @</h4>
                    <?php

                    }
                } else { ?>
                    <h4>Error!! Inserte un Email</h4>
            <?php
                }
            }
            ?>
            <br>
            <br>
            <br>






            <h3>4. Recibir un nro. de DNI en un formulario y:
                <p>a. Eliminar los puntos.</p>
                <p>b. Para el caso de un dni de 7 dígitos, imprimir un mensaje de “Trámite de jubilación”.</p>
            </h3>
            <form action="" method="post">
                <input type="text" class="inputForm" name="DNI" maxlength="10"><!-- si uso type number no me deja ingresar mas de un . o , asi que puse text para que funcione el ejercicio -->
                <input type="submit" class="boton" name="punto4" value="Enter">
            </form>
            <?php
            if (isset($_POST['punto4']) && !empty($_POST['punto4'])) {
                if ((isset($_POST['DNI']) && !empty($_POST['DNI']))) {
                    $dniIngresado = $_POST['DNI'];
                    $sacar = array(".", ",");
                    $dniSinPuntos = str_replace($sacar, '', $dniIngresado);

            ?>
                    <br>
                    <h4 class="resultado"><?php echo $dniSinPuntos ?></h4>
                    <?php

                    if (strlen($dniSinPuntos) <= 7) {
                    ?>
                        <h4 class="resultado">Trámite de jubilación</h4>
                    <?php
                    }
                } else { ?>
                    <h4>Error!! Inserte un numero</h4>
            <?php
                }
            }
            ?>
            <br>
            <br>






            <h3>5. Cree una funcion que reciba como parámetro un array de ciudades de Argentina
                y devuelva una única cadena de caracteres con dichas ciudades separadas por
                el caracter #</h3>
            <?php
            $ciudades2 = array('Mar del Plata', 'Villa Gesell', 'Lujan', 'Moreno', 'Pilar', 'Miramar');
            function ciudadesUni($arrayreci)
            {
                $ciudadesUnidas = implode(" # ", $arrayreci);
                ?>
                <h4 class="resultado"><?php echo $ciudadesUnidas ?></h4>
                <?php
            }
            ciudadesUni($ciudades2);
            ?>
</body>

</html>