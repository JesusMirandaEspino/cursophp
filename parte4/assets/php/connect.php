<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $port = '3306';
    $db = 'quiz';

    $conn = mysqli_connect( $host, $user, $pass, $db, $port) or die('Error al conectar a la base de datos');

    echo 'conexion existosa' . '<br/>';


?>