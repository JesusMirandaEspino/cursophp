<?php

$archivo = 'imagen.jpg';
$carpeta = '/imagenes';

if( file_exists(  $carpeta.$archivo ) ){


    if( is_file($carpeta . $archivo ) ){
        echo 'Si es un archivo';

        $size = filesize($carpeta . $archivo );
        $creado = filectime($carpeta . $archivo );
        $modificado = filemtime($carpeta . $archivo );

    }else if(  is_dir($carpeta . $archivo  ) ){
        echo 'Si existe la carpeta';
        $dirID = opendir( $carpeta . $archivo  );

        while( $nombre = readdir( $dirID ) ){
            echo $dirID;

            if(  is_file(  $carpeta . $archivo )){ 
                echo $archivo;  
            }
            if (is_dir($carpeta . $archivo)) {
                echo $archivo;
            }
        }
        
    }


    echo 'Si existe el archivo';




}else{
    echo 'No existe el archivo';
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