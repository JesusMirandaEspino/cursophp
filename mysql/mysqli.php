<?php

$conectar = new mysqli( 'localhost', 'root', '', 'prueba_datos' );

if($conectar->connect_errno){
    die();
}else{
    $sql = 'SELECT * FROM usuarios';
    $result = $conectar->query( $sql );

    if($result->num_rows){

        
        echo '<pre>';
        var_dump( $result->fetch_assoc() );
        var_dump( $result->fetch_assoc() );
        echo '</pre>';


    }else{
        echo 'No hay Datos';
    }
}

?>