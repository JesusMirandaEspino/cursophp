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

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros( $tabla, null, null );

        return $respuesta;
    }




    /***********************/
    /*    Ingresar   */
    /**********************/
    public function ControlIngreso()
    {

        if (isset($_POST['ingresoEmail'])) {

            $tabla = 'registro';
            $item = 'email';
            $valor = $_POST['ingresoEmail'];

            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);


                if (is_array($respuesta)) {

                        if ($respuesta['email'] == $_POST['ingresoEmail'] && $respuesta['password'] == $_POST['ingresoPwd']) {

                            $_SESSION['validarIngreso'] = 'ok';

                            echo '<script> if( window.history.replaceState ){
                            window.history.replaceState( null, null, window.location.href );

                            window.location = "index.php?pages=inicio";

                            } </script>';

                        } else {

                            echo '<script> if( window.history.replaceState ){
                            window.history.replaceState( null, null, window.location.href )
                            } </script>';

                            echo '<div class="alert alert-danger" >Usuario no encontrado</div>';
                        }

                }else {

                    echo '<script> if( window.history.replaceState ){
                    window.history.replaceState( null, null, window.location.href )
                    } </script>';

                    echo '<div class="alert alert-danger" >Error en Contraseña o Usuario no encontrado</div>';
                }
        } 
    }


}





?>