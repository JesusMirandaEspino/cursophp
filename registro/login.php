<?php

    session_start();

if ( isset( $_SESSION['usuario'] ) ) {
    header('Location: index.php');
}


$errores = '';

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $usuario = filter_var(  strtolower( $_POST['usuario'] ), FILTER_SANITIZE_STRING );
    $password = $_POST['password'];
    $password = hash( 'sha512', $password );

    try{
        $conexion = new PDO('mysql:host=localhost; dbname=login', 'root', '');
    }catch( PDOException $e ){
        echo "Error:" .  $e->getMessage();
    }

    $statement = $conexion->prepare(' SELECT * FROM usuarios WHERE usuario = :usuario AND pass = :password ' );
    $statement->execute(array(':usuario' => $usuario, ':password' => $password ));
    $resultado = $statement->fetch();

    $falso = false;



    if ($resultado !== $falso) { // !$resultado

        $_SESION['usuario'] = $usuario;
        header('Location: contenido.php');

    }else{
        $errores .= '<li> Datos incorrectos  </li>';
    }

    

}



require('views/login.view.php');


?>