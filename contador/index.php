<?php

function contarUsuarios()
{

    $archivo = 'contador.txt';

    if (file_exists($archivo)) {
        $cuenta = file_get_contents($archivo)  + 1;
        file_put_contents($archivo, $cuenta);

        return $cuenta;
    } else {
        file_put_contents($archivo, 1);
        return 1;
    }
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
    <title>Contador de visitas</title>


</head>

<body>

    <!-- **************************  -->
    <!-- **************************  -->
    <header>


    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>


            <section class="fila" >
            
            
                <div class="contenedor1" >

                    <div class="col-full-12">
                    
                            <h1>  <?php  echo contarUsuarios(); ?>   </h1>

                    </div >
                
                </div>

            </section>

    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>



</body>

</html>