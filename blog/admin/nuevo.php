<?php

session_start();

require('../config.php');
require('../function.php');


$conexion = conexion($bd_config);

comprobarSesion();

if (!$conexion) {
    header('Location: ../error.php');
}

if( $_SERVER['REQUEST_METHOD'] == 'POST'){
    $titulo = limpiardatos( $_POST['titulo']  );
    $extracto = limpiardatos($_POST['extracto']);
    $texto = $_POST['titulo'];
    $thumb = $_FILES['thumb']['tmp_name'];

    $archivo_subido = '../' . $blog_config['carpeta_imagenes']  . $_FILES['thumb']['name'];

    move_uploaded_file( $thumb, $archivo_subido );

    $statement = $conexion->prepare(' INSERT INTO articulos ( id, titulo, extracto, texto, thumb)  VALUES ( null, :titulo, :extracto, :texto, :thumb)');

    $statement->execute( array( 
        ':titulo' => $titulo, 
        ':extracto' => $extracto, 
        ':texto' => $texto, 
        ':thumb' => $_FILES['thumb']['name']
    ));

    header('Location: http://localhost/cursophp/blog/admin');

}



require('../views/nuevo.view.php');

?>