<?php 

    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    if( strcmp( $usuario, 'jesus' )==0 && strcmp( $clave, 'hola' )==0 ){
        session_start();
        $_SESSION['acceso'] = '1';
        echo 'Acceso aprobado';
    }else{
        echo 'Acceso denegado';
    }


    echo '<a href="privado.php">confidencial</a>';


?>