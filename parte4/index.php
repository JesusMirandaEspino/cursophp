<?php

    $correo = 'fj_****<br/>jesus@@@gmail.com****hola que tal';

    echo  $correo . '   ' ;

    $correo = filter_var( $correo, FILTER_SANITIZE_EMAIL );

    echo $correo;



    if( filter_var( $correo, FILTER_VALIDATE_EMAIL ) ){
        echo 'El correo es correcto';
    }else{
        echo 'El correo es incorrecto';
    }



    echo '<br/>';

    $saludo = '<h1>Hola que tal</h1>';

    echo $saludo;

    $saludo = filter_var( $saludo, FILTER_SANITIZE_STRING );

    echo $saludo;



    $url = 'https://www      .udemy       .com'; 

    $url = filter_var( $url, FILTER_SANITIZE_URL );

    echo $url;


    if (filter_var($url, FILTER_VALIDATE_URL)) {
        echo 'El url es correcto';
    } else {
        echo 'El url es incorrecto';
    }



    $titulo = filter_input(  INPUT_GET, 'Buscar', FILTER_SANITIZE_SPECIAL_CHARS );
    $buscar = filter_input(INPUT_GET, 'Buscar', FILTER_SANITIZE_ENCODED );

    echo "<a href='https://www.google.com/?buscar=".$buscar."' >Buscar</a>";


    $data = [ 'id' => '<p>Libros</p>', 'cantidad' => '<h2>10</h2>', 'version' => '1.0.0', 'capitulos' => [ '1', '15', '24' ], 'precio' => '100.00' ];

    $filtros = [    'id' => FILTER_SANITIZE_ENCODED, 
                    'cantidad'  => 
                                    [   'filter' => FILTER_VALIDATE_INT, 
                                        'flags' =>  FILTER_FORCE_ARRAY, 
                                        'options' => [ 'min_range' => 1, 'max_range' => 15 ]  ],
                    'version'   => FILTER_SANITIZE_ENCODED,
                    'noExiste'  => FILTER_VALIDATE_INT,
                    'capitulos' => [    'filter' => FILTER_VALIDATE_INT,
                                        'flags' =>  FILTER_REQUIRE_SCALAR ],
                    'precio'    => [    'filter' => FILTER_VALIDATE_INT,
                                        'flags' =>  FILTER_REQUIRE_ARRAY] ];

    $misDatos = filter_var_array( $data, $filtros  );

    var_dump($misDatos);


    $edad = 80;
    $min = 1;
    $max = 120;

    if( filter_var( $edad, FILTER_VALIDATE_INT, [ 'options' => [ 'min' => $min, 'max' => $max ]  ] ) ){
        echo 'La edad es correcta';
    }else{
        echo 'La edad es incorrecta';
    }

    $ip = '202.$$132254234324';


    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6 )) {
        echo 'La ip es correcta';
    } else {
        echo 'La ip es incorrecta';
    }


    function validarNombre( $cadena ){
        if( !strpos( $cadena, ', ' )  ){ return false; }
        list( $apellidos, $nombre ) = explode(', ', 2);
        $vacios = (empty($apellidos) || empty($nombre) );
        $sonCadenas = ( !is_string( $apellidos ) || !is_string($nombre));

        if( $vacios || $sonCadenas ){
            return false;
        }else{
            return $nombre . '  ' . $apellidos;
        }

    }


    $nombre = 'Miranda, Jesus';
    $nuevo = filter_var( $onmbre, FILTER_CALLBACK, [ 'options' => 'validarNombre' ]);

    if( !$nuevo ){
        echo 'Nombre es incorrecto';
    }else{
        echo 'Nombre es correcto';
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