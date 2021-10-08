<?php

$im = @imagecreate(110, 20)
    or die("Cannot Initialize new GD image stream");
$color_fondo = imagecolorallocate($im, 0, 0, 0);
$color_texto = imagecolorallocate($im, 233, 14, 91);
imagestring($im, 1, 5, 5,  "A Simple Text String", $color_texto);
imagepng($im);
imagedestroy($im);


//  Lienzo
$lienzo = @imagecreate( 600,200 );

// Color de Fondo
$colorFondo = imagecolorallocate( $lienzo, 255, 255, 255 );

// Ciclo
for( $j = 0; $j < 4; $j++ ){
    for( $i = 0; $i <= 12; $i++ ){
        $rojo = rand( 0, 255 );
        $verde = rand(0, 255);
        $azul = rand(0, 255);

        // Creamos el color RGB
        $relleno = imagecolorallocate( $lienzo, $rojo, $verde, $azul  );

        // Creamos el rectangulo
        imagefilledrectangle( $lienzo, 50*$i, 50*$j, 50*($i+1), 50*($j+1), $relleno );
    }
}

    // cabecera
    header('Conte-type: image/png');

    // Desplegamos el formato png
    imagepng($lienzo);

    //Destruimos la imagen
    imagedestroy($lienzo);


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
    <title>Imagenes</title>


</head>

<body>


    <!-- **************************  -->
    <!-- **************************  -->
    <header>



        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">



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