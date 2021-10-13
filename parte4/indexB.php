<?php

    function edad($fecha){
        $dia = date('j');
        $mes = date('n');
        $year = date('Y');

        $anacimiento = substr( $fecha, 0, 4 );
        $mnacimiento = substr( $fecha, 5, 2 );
        $dnacimiento = substr( $fecha, 8, 2 );


        if( $mnacimiento > $mes ){
            $edad = $year - $anacimiento -1;

        }else if( $mes == $mnacimiento && $dnacimiento > $dia ){
            $edad = $year - $anacimiento -1;
        }else{
          $edad = $year - $anacimiento -1; 
        }

        return $edad;

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

                    <form action="index.php" method="post">

                        <label for=""> Introduzca la cantidad a convertir </label>
                        <input type="text" name="cantidad" id="">

                        <input type="radio" name="tipo" id="tipo" value="1" checked="checked"> Dolares
                        <input type="radio" name="tipo" id="tipo" value="2" > Pesos Mexicanos 

                        <input type="hidden" name="estado" value="1">

                        <input type="submit"  value="Convertir">

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