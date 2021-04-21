<?php

$conectar = new mysqli( 'localhost', 'root', '', 'prueba_datos' );

if($conectar->connect_errno){
    die();
}else{
    $statement =  $conectar->prepare( "INSERT INTO  usuarios( ID, nombre ) VALUES( ?, ? ) ");

    //s = string 
    //i = intenger
    //d = double
    
    $statement->bind_param('ss', $id, $nombre );
    $id = NULL;

    if( isset($_GET['nombre']) ){
        $nombre = $_GET['nombre'];
    }else{
        $nombre = 'Ainsnogoal';  
    }

    $statement->execute();

    if( $conectar->affected_rows >= 1 ){
        echo 'Filas afectadas ' . $conectar->affected_rows;
    }else{
        echo 'No se agregaron datos';
    }

}
