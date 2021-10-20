    <?php
    
    session_start();

    if( isset( $_SESSION['acceso'] ) ){
        session_destroy();
        echo 'session cerrada';
    }else{
        echo 'No hay session abierta';
    }


    echo '<a href="index.php">ir a inicio</a>';


    ?>