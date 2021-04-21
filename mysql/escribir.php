<?php

$conectar = new mysqli( 'localhost', 'root', '', 'prueba_datos' );

if($conectar->connect_errno){
    die();
}else{
    $sql = "INSERT INTO  usuarios( ID, nombre ) VALUES( null, 'Xenomorsa' ) ";
    $conectar->query( $sql );

    if( $conectar->affected_rows >= 1 ){
        echo 'Filas afectadas ' . $conectar->affected_rows;
    }

}


?>