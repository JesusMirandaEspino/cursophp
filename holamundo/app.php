<?php     

$texto = 'Jesus';
$numero = 10;
$numero2 = '5';
$arreglo = array( 'Yisus', 'Mutuelo', 'Ramo' );
$asociativo = array( 'valor1' => 'uno', 'valor2' => 'dos', 'valor3' => 'tres' );
$booleano = false;
$textoFormulario = '< > && "" ';
$cadena = '  Hola ';
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');

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

//convierte los caracteres especiales en texto
echo htmlspecialchars( $textoFormulario );

//elimina espacios en texto
echo trim( $cadena );

//Muestra el tamaño en numero de los caracteres
echo strlen( $textoFormulario );

//Corta el texto desde la posicion indicada la inicio a la indicada al final
echo substr($textoFormulario, 2, 4 );

//Convierte  a mayusculas
echo strtoupper($texto);

//Convierte a minusculas
echo strtolower($texto); 

//Busca e incida la posicion de un caracter
echo strpos($texto, 'u' );

//extrae los valores de un array asociativo y los convierte en variables
extract( $asociativo );
echo $valor1;

//extrae el ultimo elemento de un array
$ultimo = array_pop($semana );
echo $ultimo;

//invierte el arreglo
$semanaR = array_reverse( $semana );
echo join(' - ', $semanaR);

//une los elementos de un array
echo join( ' - ', $semana  );

//ordena de forma alfabetica
rsort($semana );
echo join(' - ', $semana);

sort($semana);
echo join(' - ', $semana);



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