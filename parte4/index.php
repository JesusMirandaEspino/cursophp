<?php

    $path = 'libros2.xml';

    $writer = new XMLWriter();
    $writer->openUri($path);

    $writer->startDocument( '1.0' );
    $writer->startElement('libros');

    $writer->startElement('libro');
    $writer->writeAttribute( 'nombre', 'libro1' );
    $writer->endElement();

    $writer->startElement('libro');
    $writer->writeAttribute( 'nombre', 'libro2' );
    $writer->endElement();

    $writer->endElement();

    $writer->endDocument();

    $writer->flush();



    // Leer archivo JSON

    $path2 = 'alumnos.json';

    if( !file_exists( $path2 ) ){
        exit('File no found');
    }

    $data = file_get_contents( $path2 );
    $json = json_decode( $data, true );

    for ($i=0; $i < count($json); $i++) { 
        $n = $json[$i]['nombre'];
        $c = $json[$i]['cali'];

        echo $n . '  ' . $c . '    ';
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