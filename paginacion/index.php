<?php


try{
    $conexion = new PDO( 'mysql:host=localhost;dbname=paginacion', 'root', '');

}catch(  PDOException $e ){
    echo 'Error' .$e->getMessage(); 
    die();
}


require( 'index.view.php' );



?>