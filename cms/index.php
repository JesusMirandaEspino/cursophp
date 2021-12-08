<?php

    require_once('./controls/control.layout.php');
    require_once('./controls/control.form.php');

    require_once( './models/conexion.php' );
    require_once('./models/form.model.php');

    $conexion = Conexion::conect();


    $plantilla = new ControladorPlantilla();

    $plantilla->ControlTraerPlantilla();

?>