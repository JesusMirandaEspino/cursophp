<?php

class ControladorFormularios {

    /******************/
    /*    Registro   */
    /*****************/
    
    public function ControlRegistro(){
        if( isset( $_POST['registroNombre'] ) ){
            //code
            echo $_POST['registroNombre'] ;
        }
    }
}


?>