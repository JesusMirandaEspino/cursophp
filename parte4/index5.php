<?php

    touch("datos.txt");

    // Copiar un arhivo
    if( copy(  datos.txt, datos1.txt ) ){
        echo 'Copia de datos correctamente';
    }else{
        echo 'Error al copiar los datos';
    }

    //Renombrar un archivo
    if( rename(  datos1.txt, datos2.txt ) ){
        echo 'Archivo renombrado correctamente';
    }else{
        echo 'Error al tratar de renombrar el archivo';
    }



    $archivo = 'contador.txt';
    if( file_exists($archivo) ){
        $a = fopen($archivo, 'r+');
        $visita = fgets($a, 1024);
        $visita++;
        rewind( $a );
        fwrite( $a, $visita );
    }else{
        $a = fopen($archivo, 'w+');
        $visita = 1;
        fwrite( $a, $visita );   
    }
    fclose($a);


    if( $visita==1 ){
        echo 'Felicidades usted es nuestra primera visita';
    }else{
        echo 'Usted es la visita n.-' . $visita;
    }


    $cadena = 'Esta es una cadena de texto';
    file_put_contents( 'poema.txt', $cadena );

    $cadena = file_get_contents('poema.txt');

    $cadena = 'Esta es otra cadena de texto';

    file_put_contents( 'poema.txt', $cadena, FILE_APPEND | LOCK_EX );

    $cadena = file_get_contents('poema.txt');


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