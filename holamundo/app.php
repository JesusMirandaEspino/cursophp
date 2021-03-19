<?php     

$texto = 'Jesus';
$numero = 10;
$numero2 = '5';
$arreglo = array( 'Yisus', 'Mutuelo', 'Ramo' );
$asociativo = array( '1' => 'uno', '2' => 'dos', '3' => 'tres' );
$booleano = false;
$textoFormulario = '< > && "" ';
$cadena = '  Hola ';

var_dump( $texto );
print_r( $texto );


function saludo(){
    echo 'Hola desde php';
}

function resta( $x, $y  ){
    return $x - $y;
}


function suma( $a, $b ){
    return $a + $b;
}

saludo();

echo resta( suma( 5, 10 ), 5 );


echo htmlspecialchars( $textoFormulario );
echo trim( $cadena );
echo strlen( $textoFormulario );
echo substr($textoFormulario, 2, 4 );
echo strtoupper($texto);
echo strtolower($texto); 
echo strpos($texto, 'u' );
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
</body>

</html>