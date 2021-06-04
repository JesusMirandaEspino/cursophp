<?php

require('config.php');

require('function.php');


$conexion = conexion($bd_config);

if( !$conexion ){
    header('Location: error.php');
}

$post = obtenerPost($blog_config['post_por_pagina'], $conexion);



require('views/index.view.php');




?>