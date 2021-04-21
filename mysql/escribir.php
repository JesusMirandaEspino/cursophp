<?php

$conectar = new mysqli( 'localhost', 'root', '', 'prueba_datos' );

if($conectar->connect_errno){
    die();
}else{
    $sql = "INSERT INTO  usuarios( ID, nombre ) VALUES( null, 'Geralt' ) ";
    $conectar->query( $sql );
}
