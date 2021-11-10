<?php

    require_once('./controls/control.layout.php');
    require_once('./controls/control.form.php');

    require_once( './models/conexion.php' );

    $conexion = Conexion::conect();


    $plantilla = new ControladorPlantilla();

    $plantilla->ControlTraerPlantilla();

?>