<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $port = '3306';
    $db = 'quiz';


    try{

        $conn = new PDO('mysql:host=localhost;dbname=quiz', $user, $pass);
        echo 'conexion existosa' . '<br/>';

    }catch(PDOException $e){

        echo 'Erro al conectar a la base de datos' . $e->getMessage();
        
    }




?>