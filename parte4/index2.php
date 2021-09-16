<?php

$texto = '$560,000';
$re = str_replace( '$', '', $texto );
$ca = str_replace( ',', '', $re );
$salto = '<br/>';
echo $ca;
$hexadecimal = 'ff6600';
echo $salto;


$nuevaCadena = 'esta es una cadena de texto';

echo str_shuffle( $nuevaCadena );

$tabla = get_html_translation_table( HTML_ENTITIES );
$otraCadena = 'esta es otra cadena de texto con salto de linea para una brueba con una funcion en php';
$salida = wordwrap( $otraCadena, 20, '<br/>', true );


$frutas = 'manzana melon platano sandia';
$frutas_array = explode( ' ', $frutas );

$nombre = 'Jose de Jesus Miranda Espino';

echo cos( 2.11122 ) .  $salto;
echo atan(1.22) .  '<br/>';
echo atanh(1.22) .  '<br/>';
echo 1/sin(0.701) .  '<br/>';
echo 1/cos(0.701) .  '<br/>';
echo 1/tan(0.701) .  '<br/>';

echo ucwords( $nombre ) . '<br/>';
echo ucfirst($nombre) . '<br/>';

foreach(  $frutas_array as $fruta ){
    echo '<p> ' .  $fruta . '</p>';
}


list( $manzana, $melon, $platano, $sandia ) = explode(' ', $frutas);

echo $manzana . '   ' . $melon .  '   ' .  $platano . '   ' . $sandia;

// error al imprimir str echo strstr( $otraCadena, $tabla );

echo $salida;

echo $salto;

echo rand( 100, 200 );

echo $salto;


foreach(  range( 0, 30 )  as $key => $value ){
    echo ' *** '. $value;
}

echo $salto;
echo  '<hr>';

foreach (range(0, 50, 5)  as $key => $value) {
    echo ' --- ' . $value;
}


echo $salto;
echo  '<hr>';

foreach (range( 'a', 'z' )  as $key => $value) {
    echo ' *** ' . $value;
}


echo $salto;
echo  '<hr>';
echo exp(12);

echo $salto;
echo  '<hr>';
echo pow(2, 6);

echo $salto;
echo  '<hr>';
echo sqrt(9);

echo $salto;
echo  '<hr>';
echo base_convert( $hexadecimal, 16, 2  );


echo $salto;
echo  '<hr>';
echo base_convert($hexadecimal, 16, 8);

echo $salto;
echo  '<hr>';
echo base_convert($hexadecimal, 16, 10);


echo $salto;
echo  '<hr>';
echo hexdec( 'ABCD' );


echo $salto;
echo  '<hr>';
echo abs( 12.5 );


echo $salto;
echo  '<hr>';
echo abs(14.6);

echo $salto;
echo  '<hr>';
echo round(14.5);

echo $salto;
echo  '<hr>';
echo floor(12.514542);


echo $salto;
echo  '<hr>';
echo max(1,2,3,4,5,6,7,8,9);


echo $salto;
echo  '<hr>';
echo min(1, 2, 3, 4, 5, 6, 7, 8, 9);


echo $salto;
echo  '<hr>';
echo intdiv( 3,2 );

echo $salto;
echo  '<hr>';
echo intdiv(35, 7);

echo $salto;
echo  '<hr>';
echo intdiv(75, 7);


echo $salto;
echo  '<hr>';
echo fmod(5.7, 1.3);

$bytes = random_bytes(10);
echo $salto;
echo  '<hr>';
echo bin2hex($bytes);

echo $salto;
echo  '<hr>';
echo random_int(0, 1024);


echo $salto;
echo  '<hr>';

$texto = "\t\thola a todos\t\t";
$binario = "\x09hola a todos\x0A";
$saludar = ' Hola a todos ';

$cadena = rtrim($texto);
echo $cadena;

echo $salto;
echo  '<hr>';
$cadena = trim($texto);
echo $cadena;

echo $salto;
echo  '<hr>';
$cadena2 = ltrim( $binario, "\x00..\x1F" );
echo $cadena2;

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