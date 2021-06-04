<?php

require('config.php');

require('function.php');


conexion($bd_config);

if( !$conexion ){
    header('Location: error.php');
}

require('views/index.view.php');




?>