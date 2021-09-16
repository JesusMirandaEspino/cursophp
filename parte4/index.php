<?php

    if( isset($_REQUEST['politica-cookies']) ){
        $caducidad = time() + ( 60 * 60 * 24 * 365 );

        setcookie( 'politica', '1', $caducidad );
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


    <?php 
    if( !isset( $_REQUEST[ 'politica-cookies' ] ) && !isset( $_COOKIE['politica'] )  ): 
    ?>

        <section  class="fila" >

            <div class="contenedor1" >

                <div class="col-full-12" id="galletas1" >

                    <p> Esta pagina utiliza cookies, para obtener datos de navegacion. Si continuas, consideramos que estas de acuerdo </p>
                    <a href="./politicas-cookies.php"> Mas Informacion </a>
                    <button type=""  id="aceptar">Aceptar</button>
            
                </div>

                <div class="col-full-12" id="galletas2"  onmouseover="document.getElementById(galletas1)" >
                    <p>Politicas de cookies</p>
                </div>
                
            </div>
            
        </section> 
            
 


    <?php  endif; ?>



    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>

    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>

    <script >

        window.onload = function (){
            document.getElementById('aceptar').onclick = function () {
                window.location='?politica-cookies=acepto';
            }
        }


    </script>

    <script src="assets/js/app.js"></script>

</body>

</html>