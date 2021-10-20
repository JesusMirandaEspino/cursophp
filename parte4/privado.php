<?php 

    session_start();

    if($_SESSION['acceso'] != '1' ){
        header( 'Location:index.php' );
        unset($_SESSION['acceso'] );
        exit;
    }


    echo 'Usted que hace aqui';

    echo '<a href="index.php">regresar</a>';

    echo '<a href="salida.php">cerrar session</a>';

?>