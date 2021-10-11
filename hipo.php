<html lang="es">

    <head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name = "viewport" content="width=device-width, initial-scale=1.0">
    <title>Cáculo la hipotenusa</title>


    </head>


    <body>

                <?php

                if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular') {

                    $cateto1 = $_POST['cateto1'];
                    $cateto2 = $_POST['cateto2'];
                    $hipotenusa = null;

                    if(!empty($cateto1) && !empty($cateto2)){

                        if(is_numeric($cateto1) && is_numeric($cateto2)){

                            $hipotenusa = sqrt (pow($cateto1,2) + pow($cateto2,2));
                            echo "<h2 align='center'>El resultado es: " . $hipotenusa . "</h2>";
                            echo "<a href='index.html'>Volver al atrás</a>";
                        

                        }else{

                        echo "El valor del Cateto 1 o del Cateto 2 deben ser númericos";
                        echo "<a href='index.html'>Volver al atrás</a>";


                    }

                    }else{

                        echo "El valor del Cateto 1 o del Cateto 2 no deben estar vacíos, 
                        por favor añada un valor";
                        echo "<a href='index.html'>Volver al atrás</a>";

                    }

                }else{

                    echo "Debe pulsar el botón de calcular";
                    echo "<a href='index.html'>Volver al atrás</a>";

                }

                ?>


    </body>

</html>
