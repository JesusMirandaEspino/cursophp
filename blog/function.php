<?php   

function conexion($bd_config){

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=blog', 'root', '');
        return $conexion;

    } catch (PDOException $e) {
        return false;
    }

}


function limpiardatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}



conexion($bd_config);


?>