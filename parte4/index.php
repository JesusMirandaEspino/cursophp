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