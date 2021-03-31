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
            $errores .= 'Por Favor Ingresa Un nombre <br/>  ';
        }


        if( !empty($emailuser ) ){
            $emailuser = filter_var($emailuser, FILTER_SANITIZE_EMAIL);
            
            if(!filter_var($emailuser, FILTER_VALIDATE_EMAIL )){
                $errores .= 'Por Favor Ingresa Un Correo Valido <br/>  ';  
            }

        }else{
            $errores .= 'Por Favor Ingresa Un Correo<br/>  ';  
        }


        if( !empty($menssage) ){
            $menssage = htmlspecialchars($menssage);
            $menssage = trim($menssage);
            $menssage = stripslashes($menssage);
        }else{
            $errores .= 'Por Favor Ingresa Un Mensaje <br/>  ';  
        }


        if( !$errores ){
            $asunto = 'Asunto del correo';
            $mensaje_preparado = "De: $nameuser ";
            $mensaje_preparado .= "Correo:  $emailuser ";
            $mensaje_preparado .= "Mensaje:  $menssage ";

           // mail($enviar_a, $asunto, $mensaje_preparado );

            $enviado = true;

        }

    }



    require( 'index.view.php' );

?>

