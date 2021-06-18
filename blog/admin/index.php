<?php

session_start();

require('../config.php');
require('../function.php');


$conexion = conexion($bd_config);



if (!$conexion) {
    header('Location: ../error.php');
}

$posts = obtenerPost($blog_config['post_por_pagina'], $conexion);


if (!$posts) {
    header('Location: ../error.php');
}


require('../views/admin.views.php');

echo 'hola';


?>