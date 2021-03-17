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
$semana = array( 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo' );

echo '  ' . $semana[3];


$meses = array( '1' => 'Enero', '2' => 'Febrero','3' => 'Marzo', '4' => 'Abril', '5' => 'Mayo', '6' => 'Junio', '7' => 'Julio', '8' => 'Agosto', '9' => 'Septiembre', '10' => 'Octubre', '11' => 'Noviembre', '12' => 'Diciembre' );


echo $meses['1'];

//Arreglo multidimensional
    $amigos = array(
                array('yisus', 5500),
                array('Mutuelo', 6000)
                );

$nummeses = count( $meses );

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

        <h1><?php echo 'Hola Mundo, Hola ' . $nombre ; ?></h1>

        <h2> <?php  echo 'Hola soy ' . $nombre . ' Tengo ' . $edad . ' Años'?> </h2>

    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>

    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>



</body>

</html>