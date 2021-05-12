<?php

if ($_SESSION['usuario']) {
    header('Location: index.php');
} 

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $usuario = filter_var(  strtolower( $_POST['usuario'] ), FILTER_SANITIZE_STRING );
    $password = $_POST['password'];
    $password = hash( 'sha512', $password );

    
}



require('views/login.view.php');


?>