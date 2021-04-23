<?php


try{
    $conexion = new PDO( 'mysql:host=localhost;dbname=paginacion', 'root', '');

}catch(  PDOException $e ){
    echo 'Error' .$e->getMessage(); 
    die();
}


$pagina = isset($_GET['pagina']) ? (int) $_GET['pagina'] : 1;
$postpagina = 5;

$inicio = ($pagina > 1 ) ? ( $pagina * $postpagina - $postpagina  ) : 0;

$articulos = $conexion->prepare( " SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $postpagina " );
$articulos->execute();

$articulos = $articulos->fetchAll();


//print_r($articulos);

if( !$articulos ){
    header('Location: index.php');
}


$totalArticulos = $conexion->query( 'SELECT FOUND_ROWS() as total' );
$totalArticulos = $totalArticulos->fetch()['total'];

//echo $totalArticulos;


$numeroPaginas = ceil($totalArticulos / $postpagina);

//echo $numeroPaginas; 

require( 'index.view.php' );



?>