<?php

    // Leemos  la imagen

    $imagen = imagecreatefromjpeg( './assets/img/photos/1.png'  );
    $black = '0X000000';

    //  marca de agua
    $marca = imagecreatetruecolor( 630, 40 );
    imagefilledrectangle(  $marca, 3,20, 12, 'Imagen de mi esposita, un dibujito', $black );

    // margenes  
    $md = 10;
    $mi = 10;
    $sx = imagesx( $marca );
    $sy = imagesy( $marca );
    $ix = imagesx( $imagen );
    $iy = imagesx( $imagen );


    // Fusionar ambas Imagenes
    imagecopymerge( $imagen, $marca, $ix - $sx - $md, $iy - $sy - $mi, 0, 0, $sx, $sy, 50 );

    //Creamos el archivo
    imagepng( $imagen, 'fotomarca.png' );

    // Liberamos la memoria
    imagedestroy( $imagen );

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