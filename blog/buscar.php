<?php

require('config.php');

require('function.php');


$conexion = conexion($bd_config);

if (!$conexion) {
    header('Location: error.php');
}

if(  $_SERVER[ 'REQUEST_METHOD']  == 'GEt'  && !empty($_GET['busqueda'] )){

    $busqueda = limpiardatos($_GET['busqueda'] );

    $stament = $conexion->prepare( ' SELECT * FROM  articulos WHERE titulo LIKE :busqueda or texto LIKE :busqueda' );

    $stament->execute( array( 'busqueda:'  => "%busqueda%"  ) );

    $resultados = $stament->fetchAll(); 



    if( empty($resultados) ){
        $titulo = 'No se encontraron resultados con la busqueda ' . $busqueda;
    }else{
        $titulo = 'Resultados de la busqueda ' . $busqueda;
    }    

}else{
    header( 'Location: ' . RUTA . '/index.php' );
}

require( 'views/buscar.view.php' );


?>