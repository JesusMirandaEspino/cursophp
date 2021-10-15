<?php

// Archivo a leer


// Verificar que exista el archivo
if (file_exists('libros.xml')) {

    $xml = simplexml_load_file('libros.xml');
    

} else {
    exit('Error abriendo libros.xml.');
}

$xmlJson = json_encode($xml);


//Crea las primeras etiquetas de la tabla
echo "<html><body><table border=1>";
echo "<tr><th>Titulo</th><th>Autor</th><th>Editorial</th><th>Precio</th><th>Fecha</th></tr>";

//Inicia ciclo para leer el archivo

foreach( $xml->libros as $libros ){
    echo $libros-> libro->attributes();
}


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