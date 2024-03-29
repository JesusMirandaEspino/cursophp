<?php


$archivo = 'foto.jpg';
$grados = 90;

// Cargamos la imagen
$img = imagecreatefromjpeg($archivo);


// 
$imagen90 = imagerotate( $img, $grados, 0 );

//Guardamos la imagen90
imagejpeg( $imagen90, 'foto90.jpg' );


// Cambiar tamaños de imagenes

$originales = 'imagenesOriginal/';
$destino = 'imagenes640/';


$imagenesArray = glob( $originales.'*jpg' );

foreach ($imagenesArray as $img  ){

    // Cargamos el archivo
    $imagen = imagecreatefromjpeg($img);

    // Escalamos
    $imagen = imagescale( $imagen, 640 );  

    // Guardamos
    imagejpeg( $imagen, $destino.basename( $img ) );

}

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