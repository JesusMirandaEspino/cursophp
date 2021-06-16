<?php

require('config.php');

require('function.php');


$conexion = conexion($bd_config);

if (!$conexion) {
    header('Location: error.php');
}

if(  $_SERVER[ 'REQUEST_METHOD']  == 'GET'  && !empty($_GET['busqueda'] )){

    $busqueda = limpiardatos($_GET['busqueda'] );

    $statement = $conexion->prepare( 'SELECT * FROM articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda' );

    $statement->execute( array( ':busqueda'  => "%$busqueda%"  ) );

    $resultados = $statement->fetchAll(); 



    if( empty($resultados) ){
        $titulo = 'No se encontraron resultados con la busqueda ' . $busqueda  ;
        var_dump($resultados1) ;
    
    }else{
        $titulo = 'Resultados de la busqueda ' . $busqueda;
    }    

}else{
    header( 'Location: ' . 'http://localhost/cursophp/blog/' . 'index.php' );
}

require( 'views/buscar.view.php' );


?>