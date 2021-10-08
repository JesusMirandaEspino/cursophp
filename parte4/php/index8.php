<?php



//  Lienzo
$lienzo = @imagecreate(600, 200);



// Ciclo
for ($j = 0; $j < 4; $j++) {

        $rojo = rand(0, 255);
        $verde = rand(0, 255);
        $azul = rand(0, 255);

        // Creamos el color RGB
        $relleno = imagecolorallocate($lienzo, $rojo, $verde, $azul);

        // Generamos las coordenadas de ancho y largo
        $x = rand(0, 600);
        $y = rand(0, 600);
        $r = rand(30, 100);



        // Creamos el rectangulo
        imagefilledellipse($lienzo, $x, $y, $r, $r, $relleno);

        
    
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