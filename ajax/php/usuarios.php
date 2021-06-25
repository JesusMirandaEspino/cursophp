<?php

//header( 'Content-type: application/json, charset= utf-8' );



function conexion()
{

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=ajax' , 'root', '');
        $statement = $conexion->prepare('SELECT * FROM usuarios');
        $statement->execute();
        $resultados = $statement->fetchAll();

        $respuesta = [];

       // var_dump( $resultados );
        
    } catch (PDOException $e) {
        $respuesta = [ 'Error' => true ];
        echo 'Error ' . $e;
        die();

    }
}


conexion();













?>