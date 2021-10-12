<?php



    if (isset($_POST['estado']) ) {
        
        $tc = 18.90;
        $cantidad = $_POST['cantidad'];
        $tipo = $_POST['tipo'];

        if ( $tipo === '1' ) {
            $r = $cantidad * $tc;
            $rc = number_format( $r, 2 );
            echo $rc;
        }

        if ($tipo === '2') {
            $r = $cantidad / $tc;
            $rc = number_format($r, 2);
            echo $rc;
        }
    }



    $para = 'correo1@sitio.com, correo1@sitio.com';
    $subject = 'Recordatorio';
    $mensaje = ' Texto en html ';

    // Cabeceras
    $cabeceras = 'MIME-Version: 1.0 '.'\r\n';
    $cabeceras .= 'Context-type: text/html; charset=iso-8859-1'.'\r\n';

    // Otras cabeceras
    $cabeceras .= 'To: Mary <recursoshumanos@misitio.com>, Direccion: <correo2@sitio.com>'.'\r\n';
    $cabeceras .= 'From: Recordatorio <correo2@sitio.com>'.'\r\n';
    $cabeceras .= 'Cc: otro@sitio.com'.'\r\n';
    $cabeceras .= 'Bcc: otro@sitio.com'.'\r\n';


    mail( $para, $subject, $mensaje, $cabeceras );



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