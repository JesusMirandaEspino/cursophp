<?php

    error_reporting( E_ALL );

    ini_set( 'display_errors', 1 );
// Activos en 1, inactivos en 0
    ini_set('zend.assertions', 1);
// warning en 0, fatal error en 1
    ini_set( 'assert_exception', 0 );

    class CustomError extends AssertionError{}

    assert( false, new CustomError('es falso') );

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

                    <form action="acceso.php" method="post">

                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" id="usuario" placeholder="Usuario">

                        <label for="clave">Contraseña</label>
                        <input type="password" name="clave" id="clave" placeholder="Password">

                        <input type="submit" value="Enviar">

                    </form>

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