<?php

$nombre = 'datos';
$valor = 'jesus@correo.com|Jesus|Miranda|1268418948';

// borrar una cookie $fecha = time() - 1;

$fecha = time() + (60*60*24);
setcookie( $nombre, $valor, $fecha ); 


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


    <?php 
    
        if( isset( $_COOKIE['datos'] ) ){
            $datos = $_COOKIE['datos'];
            $datos_array = explode( '|', $datos );
            $email = $datos_array[0];
            $nombre = $datos_array[1];
            $apellido = $datos_array[2];
            $fecha = $datos_array[3];
            echo 'Hola ' . $nombre . ' '  . $apellido .  ' recibimos tus datos, en breve nos comunicaremos contigo'; 
        }
    
    ?>



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