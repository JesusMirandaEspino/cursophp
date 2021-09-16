<?php


//  ejemplo header( 'Content-Type: application / pdf ' );
//  ejemplo echo file_get_contents( '/archivo.pdf' );


// ejemplo header('Content-Type: text/json ');
// ejemplo echo file_get_contents('/archivo.json');

/* Ejemplo  $img = @imagecreatefromgif( '/arhiivo/img.gif' );
header('Content-Type: image/gif ');
imagejpeg(  $img );
imagedestroy(  $img );   */

/* ejemplo 
header('Content-Type: application/octect-stream ');
header('Content-Disposition: attachment; filename=example.zip ');
echo file_get_contents('/exam.zip');
*/




$contador = 'contador.txt';
$archivo = 'archivo.txt';
$archivo1 = 'archivo.txt';



if ( touch($archivo1)){

    $bandera = false;
    $maximo = 100000;
    $contar = 0;

    while( !$bandera ){
        if( !is_writable($archivo1) ){
            $bandera = true;
            break;
        }
        $contar++;

        if( $contar > $maximo ){
            break;
        }


        if($bandera){
            $linea1 = 'Este es un texto';
            $linea2 = 'Este es otro texto';
            $linea3 = 'Este es un nuevo texto';
            $linea4 = 'Este es una variante de texto';

            $id2 = fopen($archivo1, 'w');

            fwrite($id2, $linea1);
            fwrite($id2, $linea2);
            fwrite($id2, $linea3);
            fwrite($id2, $linea4);

            flock( $archivo1, 3 );
        }


    }



    fclose( $id2 );
    flock($archivo1, 3);

}

if( touch(  $archivo ) ){
    $id2 = fopen( $archivo, 'r' );

    while( !feof( $id2 ) ){
        $linea = fgets( $id2, 1024 );
    }

    fclose( $id2 );


}else{
    echo 'Error al buscar el archivo';
}





if(  touch( $contador ) ){
    echo $contador;

    $id = fopen( $contador, 'a'  );


    fclose( $id );

}else{
    echo 'Hubo un error con el touch';
}


// para borrar un archivo unlink(  $contador );


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