<?php

/*
    if( file_exists('datos.txt') ){
        $archivo = fopen( 'datos.txt', 'r' );
    }else{
        die( 'No existe el archivo' );
    }




    function manejadorErrores( $nivel, $mensaje, $archivo, $linea, $contexto ){
        echo ' **** Nivel: ' .    $nivel;
        echo ' **** Mensaje: ' .  $mensaje;
        echo ' **** En el arhivo: ' . $archivo;
        echo ' **** En la linea: ' . $linea;
        echo ' **** Con el contexto: ';
        var_dump($contexto);
    }

    set_error_handler( 'manejadorErrores' );


    print $prueba;

*/


$num = 0;

    if( $num == 0 ){
        trigger_error('No podemos dividir entre cero', E_USER_NOTICE);
        // trigger_error( 'No podemos dividir entre cero', E_USER_ERROR );
        
    }


function suma( $n1, $n2 ){
    $total = $n1 + $n2;
    if( $total > 10 ){
        throw new Exception('Numero mayor a 10');
    }
    return true;
}

try{
    suma(10, 10);
}
catch( Exception $e ){
    echo 'Mensaje: ' . $e->getMessage();
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

                <div class="col-full-12" id="salida">


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