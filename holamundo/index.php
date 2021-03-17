<?php

// String
$nombre = 'Jesus';

//integer
$edad = 32;

// double
$decimal = 3.2;

//booleans
$verdadero = true;
$falso = false;



?>

<?php
//type of variable
echo gettype($nombre);
echo gettype($edad);
echo gettype($decimal);
echo gettype($verdadero);

//Constant
define('PI', 3.1416);
echo  PI;

//arreglo indexado
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

echo '  ' . $semana[3];


$meses = array('1' => 'Enero', '2' => 'Febrero', '3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre');
$numeros = array( 1,5,8,4,6,7,2,9,6,3 );

echo $meses['1'];

//Arreglo multidimensional
$amigos = array(
    array('yisus', 5500),
    array('Mutuelo', 6000)
);

$nummeses = count($meses);

echo $nummeses;

?>

<!DOCTYPE html>
<html lang="es">

<head>

    <!-- **************************  -->
    <!-- **************************  -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Jesus Miranda">
    <!-- **************************  -->
    <!-- **************************  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="INDEX,FOLLOW">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/responsivo.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="icon" type="image/png" href="">
    <!-- **************************  -->
    <!-- **************************  -->
    <title></title>


</head>

<body>

    <!-- **************************  -->
    <!-- **************************  -->
    <header>

        <h1><?php echo 'Hola Mundo, Hola ' . $nombre; ?></h1>

        <h2> <?php echo 'Hola soy ' . $nombre . ' Tengo ' . $edad . ' Años' ?> </h2>

    </header>





    <!-- **************************  -->
    <!-- **************************  -->
    <main>

        <h2>Meses del año</h2>

        <ul>
            <?php 
            // Ciclo foreach

            //orden alfabetico
            //sort( $meses );

            //orden descendente
            //rsort($meses);

            foreach ($meses as $mes) {
                echo '<li>' . $mes . '</li>';
            }


            sort($numeros);
            foreach ($numeros as $numero) {
                echo '<li>' . $numero . '</li>';
            }  

            ?> 
        </ul>



            <?php   
            
                $edad = 19;

                if( $edad >= 18 ){
                    echo '<h2>' . 'Tener: ' . $edad . ' Es ser mayor de edad'  .'</h2>';
                }else{
                    echo '<h2>' . '  Eres menor de edad '  . '</h2>';
                }

            ?>



            <?php


                $valor = 1;

                switch($valor){

                    case 1:
                        echo 'El valor es uno';
                        break;

                    case 2:
                        echo 'El valor es dos';
                        break;

                    case 3:
                        echo 'El valor es tres';
                        break;

                    default: break;
                        
                        
                }


            ?>


    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>



</body>

</html>