<?php



//  Lienzo
$lienzo = imagecreatetruecolor(600, 200);

// Crear colores
$blanco = imagecolorallocate( $lienzo,  255, 255, 255, );
$rojo = imagecolorallocate( $lienzo, 255, 0, 0 );
$azul = imagecolorallocate( $lienzo, 0, 255, 0 );


// Dibujamos un circulo
imagearc( $lienzo, 100, 100, 200, 200, 0,  360, $blanco );

// Arco 
imagearc($lienzo, 100, 100, 150, 150, 25,  155, $rojo);

// Ojos
imagearc($lienzo, 60, 75, 50, 50, 0,  360, $rojo);
imagearc($lienzo, 140, 75, 50, 50, 0,  360, $rojo);

header( 'Content-type: image/png' );

imagepng($lienzo);

imagedestroy( $lienzo);



$puntos = [ 130,20, 150, 90, 210, 90, 160, 130, 180, 200, 130, 160, 80, 200, 100, 130, 50, 90, 10, 90 ];

$lienzo2 = imagecreate( 250, 250 );

$fondo = imagecolorallocate( $lienzo2, 0, 0, 0 );
$azul = imagecolorallocate( $lienzo2, 0, 0, 255 );

// Dibujamos un lienzo
imagefilledrectangle( $lienzo2, 0, 0, 249, 249, $fondo );

// Dibujamos el poligono
imagefilledpolygon( $lienzo2, $puntos, 10, $azul );

imagepng($lienzo2);

imagedestroy($lienzo2);



// Tamaño de la imagen
$tamano = 500;

// Crear el lienzo
$lienzo3 = imagecreatetruecolor( $tamano, $tamano );

// Color de fondo
$fondo3 = imagecolorallocate( $lienzo3, 255, 255, 255  );

// Rellenamos el lienzo
imagefilledrectangle(  $lienzo3, 0, 0, $tamano, $tamano, $fondo  );

// Dibujar las lineas
for ($i=0; $i < 1000 ; $i++) { 
    $x1 = rand(0, $tamano);
    $y1 = rand(0, $tamano);
    $x2 = rand(0, $tamano);
    $y2 = rand(0, $tamano);

    $color3 = imagecolorallocate( $lienzo3, rand(0, 255 ), rand(0, 255), rand(0, 255)  );

    imageline( $lienzo3, $x1, $y1, $x2, $y2, $color3 );

}

imagepng($lienzo3);

imagedestroy($lienzo3);

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