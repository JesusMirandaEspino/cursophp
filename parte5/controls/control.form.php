<?php

class ControladorFormularios {

    /***********************/
       /*    Registro   */
    /**********************/
    
    static public function ControlRegistro(){
        if( isset( $_POST['registroNombre'] ) ){

            $tabla = 'registro';

            $datos = ['nombre' => $_POST['registroNombre'], 'email' => $_POST['registroEmail'], 'password' => $_POST['registroPwd']];

            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

            return $respuesta;

        }
    }


    /****************************/
    /*   Seleccionar Registro   */
    /****************************/

    static public function SeleccionarRegistros(){

        $tabla = 'registro';

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros( $tabla );

        return $respuesta;
    }

}


?>