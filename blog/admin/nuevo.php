<?php

session_start();

require('../config.php');
require('../function.php');


$conexion = conexion($bd_config);

comprobarSesion();

if (!$conexion) {
    header('Location: ../error.php');
}


require('../views/nuevo.view.php');

?>