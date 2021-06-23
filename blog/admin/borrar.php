<?php

session_start();

require('../config.php');
require('../function.php');


$conexion = conexion($bd_config);

comprobarSesion();

if (!$conexion) {
    header('Location: ../error.php');
}



$id = limpiardatos($_GET['id']);

if( !$id ){
    header('Location: http://localhost/cursophp/blog/admin');
}

$statement = $conexion->prepare(' DELETE FROM articulos WHERE id = :id ');
$statement->execute( array( 'id'  => $id ) );
header('Location: http://localhost/cursophp/blog/admin');


?>