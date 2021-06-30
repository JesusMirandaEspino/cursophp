<?php

error_reporting(0);
header('Content-type: application/json, charset= utf-8');

$nombre = $_POST['nombre'];
$edad   = $_POST['edad'];
$pais   = $_POST['pais'];
$correo = $_POST['correo'];


function validarDatos( $nombre, $edad, $pais, $correo ){

    if( $nombre == '' || $correo == ''  ||  $pais == '' ){
        return false;
    }

        elseif ( $edad == '' || is_int($edad) ) {
            $error = 'edad';
            return false;
        }

    return true;

}

if( validarDatos($nombre, $edad, $pais, $correo) ){


    try{
        $conexion = new PDO('mysql:host=localhost;dbname=ajax', 'root', '');
        $statement = $conexion->prepare(' INSERT INTO usuarios ( id, nombre, edad, pais, correo)  VALUES ( null, :nombre, :edad, :pais, :correo)');

        $statement->execute(array(
            ':nombre' => $nombre,
            ':edad' => $edad,
            ':pais' => $pais,
            ':correo' => $correo
        ));

        if( $conexion->affected_rows <= 0 ){
            $respuesta = ['Error' => true];
        }


    }catch( PDOException $e ){
        $respuesta = ['Error' => true, 'Msg' => 'No file afected'];
        echo 'Error ' . $e;
        die();
    }


}


echo json_encode( $respuesta );



?>