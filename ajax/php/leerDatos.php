<?php

error_reporting(0);


header('Content-type: application/json, charset= utf-8');

function conexion()
{

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
        $statement = $conexion->prepare('SELECT * FROM usuarios');
        $statement->execute();
        $resultados = $statement->fetchAll();

        $respuesta = [];

        foreach ($resultados as $res) {
            $usuario = [
                'id'        => $res['id'],
                'nombre'    => $res['nombre'],
                'edad'      => $res['edad'],
                'pais'      => $res['pais'],
                'correo'    => $res['correo']
            ];

            array_push($respuesta, $usuario);
        }

        echo json_encode($respuesta);
    } catch (PDOException $e) {
        $respuesta = ['Error' => true];

    }
}


conexion();


?>