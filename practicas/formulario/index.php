<?php

    $errores = '';
    $enviado = '';

    if( isset( $_POST['submit'] )  ){

        $nameuser = $_POST['nameuser'];
        $emailuser = $_POST['emailuser'];
        $menssage = $_POST['menssage'];

        if( !empty($nameuser ) ){
            $nameuser = trim($nameuser);
            $nameuser = filter_var($nameuser, FILTER_SANITIZE_STRING);
        }else{
        $errores .= 'Por Favor Ingresa Un nombre </br>  ';
        }


        if( !empty($emailuser ) ){
            $emailuser = filter_var($emailuser, FILTER_SANITIZE_EMAIL);
        }

    }



    require( 'index.view.php' );

?>