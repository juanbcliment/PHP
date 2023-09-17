<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP Numero 2</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Asap+Condensed:wght@300&family=Roboto:ital,wght@0,300;1,100&display=swap');




        body {
            background-color: #232020;


            font-family: 'Roboto', sans-serif;


        }


        .titulo {
            color: #D0C7C7;
            text-align: center;
        }


        .consig {
            color: #D0C7C7;
            font-size: 20px;
        }


        .imgagenesphp {
            text-align: center;
        }


        .vector {
            color: #D0C7C7;
            font-size: 20px;
        }


        .autor {
            color: #D0C7C7;
            font-size: 20px;
        }
    </style>
</head>


<body>
    <h3 class="titulo">ESTRUCTURA DE DATOS - OPERACIONES CON VECTORES</h3>
    <h5 class="autor">Autor: Juan Bautista || Climent DNI: 39077028 || Comisión: 3</h5>
    <h4 class="consig">1. Crear un vector asociativo que almacena las claves de acceso de 5 tipos de
        usuarios en el sistema: Administrador, Editor, Autor, Colaborador y Suscriptor.</h4>
    <div class="vector">
        <?php
        $usuarios = array(
            "Administrador" => "123rqa3213",
            "Editor" => "A42424",
            "Autor" => "Jos2523e",
            "Colaborador" => "Mar2131ia",
            "Suscriptor" => "Mic23523a"
        );
        foreach ($usuarios as $item => $value) {
            echo "$item: $value";
            echo "<br/>";
        }


        ?>
    </div>
    <h4 class="consig">2. Crear una estructura HTML, que contenga 4 imágenes (almacenadas en el
        vector) que al volver a cargar el archivo (o actualizarlo) cambien la ubicación en
        forma aleatoria</h4>
    <div class="imgagenesphp">
        <?php
        $imagenes = array(
            "https://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/hubble_33rd_ngc1333_stsci-01gyag6jy36rtbx7sxbmany6n5.png",
            "https://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/hubble_doublequasar_stsci-01gwq9wa2k9n3tvybwsze8pdn7.jpg",
            "https://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/hubble_eso505-30_pi_2mstr_flat_final.jpg",
            "https://www.nasa.gov/sites/default/files/styles/image_card_4x3_ratio/public/thumbnails/image/hubble_twhydrae_stsci-01gysy8vkfq5q3f7xmydpzdx10.png"
        );
        shuffle($imagenes);
        foreach ($imagenes as $v) {
            echo "<img src='$v'  width='400' height='400'>";
        }


        ?>
    </div>
</body>


</html>