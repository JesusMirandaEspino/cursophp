<?php


session_start();

// estabelcer el Contenido
header( 'Content-Type: image/png' );


// Crear el objeto de la imagen
$img = imagecreatetruecolor( 250, 250 );

// Crear colores
$blanco = imagecolorallocate( $img, 255, 255, 255 );
$gris = imagecolorallocate($img, 128, 128, 128);
$negro = imagecolorallocate($img, 0, 0, 0);
$blanco = imagecolorallocate($img, 255, 255, 255);

$imagefilledrectangle( $img, 0, 0, 399, 29, $blanco );


// Crear una variable Aleatoria
$l = rand( 5, 7 );
$c = 'abcdefghijklmnopqrstuvwxyz23456789';


srand( (double)microtime()*10000000 );

for ($i=0; $i < $l ; $i++) { 
    $num = rand() % 32;
    $car = substr( $c, $num, 1 );
    $str .= $car;
}


$texto = $str;

// Archivo de la fuente
$fuente = 'arial.ttf';

// 
imagettftext(  $img, 20, 0, 15, 25, $gris, $fuente, $texto );
imagettftext(  $img, 20, 0, 17, 27, $negro, $fuente, $texto );

$_SESSION['captcha'] = $texto;

// Desplegar el rectangulo
imagepng($img);
imagedestroy($img);



$ip = getenv(  'REMOTE_ADDR' );

$navegador = getenv( 'HTTP_USE_AGENT' );


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
    <title>My SQL Connect</title>


</head>

<body>


    <!-- **************************  -->
    <!-- **************************  -->
    <header>



        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">

                        <?php



                        ?>

                </div>

                <div class="col-full-12">

                </div>

            </div>

        </section>





    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>

    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>

    <script src="assets/js/app.js"></script>

</body>

</html>