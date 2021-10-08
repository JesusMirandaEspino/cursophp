<?php

    $dir = opendir( './assets/img/photos/' );
    $ren = 1;
    $i = 0;
    $tr = '</tr>';

    if( isset( $_GET['foto'] ) ){
        $foto = $_GET['foto'] ;
    }else{
        header('location: index.php');
    }


    function  validaFoto( $img ){
        $patron = "%\.(gif|jpe?g|png)$%i";
        $bandera = preg_match($patron, $img ) == 1 ? true : false ;

        return $bandera;
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
    <title>Imagenes</title>


</head>

<body>


    <!-- **************************  -->
    <!-- **************************  -->
    <header>



        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">

                <?php

                    if ($dir) {
                        
                        echo "<table border='1'> ";
                            echo '<tr>';
                            echo '<th> Imagen </th>';
                            echo '<th> Archivo KB </th>';
                            echo '<th> Ancho KB</th>';
                            echo '<th> Alto KB</th>';
                            echo '<th> Borrar </th>';
                            echo '<th> Optimizar </th>';
                            echo  $tr;

                            echo '<tr>';

                            while ( $foto=readdir( $dir )  ) {

                                if ( $foto != "." && $foto != ".." ) {

                                    if ( $i == $ren ) {
                                        $i = 0;
                                        echo  $tr;
                                        echo '<tr>';
                                    }

                                    $i++;

                                    $archivo = './assets/img/photos/'.$foto;
                                    $info = getimagesize( $archivo );
                                    $tamano = filesize( $archivo );
                                    $td = '<td>';
                                    $tdc = '</td>';
                                    $kb = ' kb  ';

                                    echo '<td>';
                                    echo "<img src='fotos/" . $foto . "' width='100px' height='100px' />";
                                    echo  $tdc;

                                    echo '<td>';
                                    echo $foto;
                                    echo $tdc;


                                    echo '<td>';
                                    echo number_format($info[0]/1024, 2) ;
                                    echo $tdc;

                                    echo '<td>';
                                    echo number_format($info[1]/1024, 2) ;
                                    echo $tdc;

                                    echo '<td>';
                                    echo number_format($tamano/1024, 2) .  '  ';
                                    echo $tdc;

                                    echo '<td>';
                                    echo "<a  href='index.php?foto=".$foto . " '> Borrar  </a>";
                                    echo $tdc;

                                    echo '<td>';
                                    echo '<button>Optimizar</button>';
                                    echo $tdc;    

                                }


                            }


                            echo '</tr>';
                        echo '</table>';

                    } else {
                        echo 'Error al abrir la carpeta de fotos';
                    }


                ?>




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