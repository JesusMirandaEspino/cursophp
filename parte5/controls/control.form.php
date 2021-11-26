<?php

class ControladorFormularios {


    /***********************/
       /*    Registro   */
    /**********************/
    static public function ControlRegistro(){
        if( isset( $_POST['registroNombre'] ) ){


            if( preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $_POST['registroNombre']) &&
                preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $_POST['registroEmail']) &&
                preg_match('/^[a-zA-Z0-9]+$/', $_POST['registroPwd']) ){
                $tabla = 'registro';

                $datos = ['nombre' => $_POST['registroNombre'], 'email' => $_POST['registroEmail'], 'password' => $_POST['registroPwd']];

                $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);

                return $respuesta;

            }else{
                $respuesta = 'error';
                return $respuesta;
            }


        }
    }



    /****************************/
    /*   Seleccionar Registro   */
    /****************************/
    static public function SeleccionarRegistros($item, $valor){

        $tabla = 'registro';

        $respuesta = ModeloFormularios::mdlSeleccionarRegistros( $tabla, $item, $valor );

        return $respuesta;
    }

    /****************************/
    /*   Actualizar Usuario     */
    /****************************/
    public function ActualizarRegistro(){

        if (isset($_POST['actualizarNombre'])) {

            if( $_POST['actualizarNombre'] != '' ){
                $password = $_POST['actualizarPwd'];
            }else{
                $password = $_POST['actualPwd'];
            }

            $tabla = 'registro';

            $datos = ['nombre' => $_POST['actualizarNombre'], 'email' => $_POST['actualizarEmail'], 'password' => $password, 'id' => $_POST['idUsuario']];

            $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

            if( $respuesta == 'ok' ){

                echo '<script> if( window.history.replaceState ){
                window.history.replaceState( null, null, window.location.href )
                } </script>';

                echo '<div class="alert alert-success" >Usuario Actualzido</div>
                
                
                    <script>
    
                        setTimeout( function(){  
                            window.location = "index.php?pages=inicio";
                        }, 3000 );

                    </script>
                
                ';
            }

            return $respuesta;
        }
    }


    /****************************/
    /*   Eliminar Usuario     */
    /****************************/
    public function eliminarRegistro(){
        if (isset($_POST['eliminarRegistro'])) {

            $tabla = 'registro';

            $valor = $_POST['eliminarRegistro'];

            $respuesta = ModeloFormularios::mdliminarRegistro($tabla, $valor);

            if( $respuesta == 'ok' ){

                echo '<script> 
                
                        if( window.history.replaceState ){
                            window.history.replaceState( null, null, window.location.href );

                            window.location = "index.php?pages=inicio";

                        } 
                    </script>';
            }
        }
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