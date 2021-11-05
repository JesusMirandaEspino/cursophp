<?php

class ControladorFormularios {

    /***********************/
       /*    Registro   */
    /**********************/
    
    static public function ControlRegistro(){
        if( isset( $_POST['registroNombre'] ) ){
            return 'ok' ;
        }
    }
}


?>