<?php   

function conexion($bd_config){

    try {
        $conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['bd'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;

    } catch (PDOException $e) {
        return false;
    }

}


function limpiardatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function pagina_actual(){
    return isset( $_GET['p'] ) ? (int)$_GET['p'] : 1;
}

function obtenerPost( $post_por__pagina, $conexion )
{
    $inicio = ( pagina_actual() > 1 ) ? pagina_actual() * $post_por_pagina - $post_por_pagina : 0; 

}





?>