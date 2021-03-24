<?php

    // print_r( $_POST );

    if(!$_POST){
        header('Location: http://localhost/cursophp/formulario/');
    }

    $nameUser = $_POST['nameuser'];
    $sextype  = $_POST['sextype'];
    $year     = $_POST['year'];
    $terms    = $_POST['terms'];


?>