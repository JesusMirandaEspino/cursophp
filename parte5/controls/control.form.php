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

                $token = md5($_POST['registroNombre'] . "+" . $_POST['registroEmail']);

                // Encriptar Contraseña
                $encriptarContrasena = crypt($_POST['registroPwd'], '$2a$07$D8VxSmTZt2E2YV454mkqAY5ew$'   );

                $datos = [  'token' => $token,
                            'nombre' => $_POST['registroNombre'], 
                            'email' => $_POST['registroEmail'], 
                            'password' => $encriptarContrasena];

                

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


            if (
                preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $_POST['actualizarNombre']) &&
                preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $_POST['actualizarEmail']) 
                
            ) {

                $usuario = ModeloFormularios::mdlSeleccionarRegistros('registro', 'token', $_POST['tokenUsuario']);

                $compararToken = md5($usuario['nombre'] . "+" . $usuario['email']);


                if ($compararToken ==  $_POST['tokenUsuario'] && $_POST['idUsuario'] == $usuario['id']) {

                    if ($_POST['actualizarNombre'] != '') {


                        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['actualizarPwd'])  ){
                            $password =  crypt($_POST['actualizarPwd'], '$2a$07$D8VxSmTZt2E2YV454mkqAY5ew$');
                        }
                    


                    } else {
                        $password = $_POST['actualPwd'];
                    }

                    $tabla = 'registro';

                    $actualziarToken = md5($_POST['actualizarNombre'] . "+" . $_POST['actualizarEmail']);

                    $datos = ['id' => $_POST['idUsuario'], 'nombre' => $_POST['actualizarNombre'], 'email' => $_POST['actualizarEmail'], 'password' => $password, 'token' => $actualziarToken];

                    $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

                    if ($respuesta == 'ok') {

                        echo '<script> if( window.history.replaceState ){
                    window.history.replaceState( null, null, window.location.href )
                    } </script>';

                        echo '<div class="alert alert-success" >Usuario Actualzido</div>
                    
                    
                        <script>
        
                            setTimeout( function(){  
                                window.location = "inicio";
                            }, 3000 );

                        </script>
                    
                    ';
                    }

                    return $respuesta;
                } else {
                    $respuesta = 'Error';
                    return $respuesta;
                }

            }else{
                $respuesta = 'Error';
                return $respuesta;              
            }

        }
    }


    /****************************/
    /*   Eliminar Usuario     */
    /****************************/
    public function eliminarRegistro(){
        if (isset($_POST['eliminarRegistro'])) {


            $usuario = ModeloFormularios::mdlSeleccionarRegistros('registro', 'token', $_POST['eliminarRegistro']);

            $compararToken = md5($usuario['nombre'] . "+" . $usuario['email']);


            if ($compararToken ==  $_POST['eliminarRegistro']) {


                    $tabla = 'registro';

                    $valor = $_POST['eliminarRegistro'];

                    $respuesta = ModeloFormularios::mdliminarRegistro($tabla, $valor);

                    if ($respuesta == 'ok') {

                        echo '<script> 
                    
                            if( window.history.replaceState ){
                                window.history.replaceState( null, null, window.location.href );

                                window.location = "inicio";

                            } 
                        </script>';
                    }
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

            $encriptarContrasena = crypt($_POST['ingresoPwd'], '$2a$07$D8VxSmTZt2E2YV454mkqAY5ew$');


                if (is_array($respuesta)) {

                        if ($respuesta['email'] == $_POST['ingresoEmail'] && $respuesta['password'] == $encriptarContrasena) {

                            $_SESSION['validarIngreso'] = 'ok';

                            $intentos_fallidos =  0;

                            ModeloFormularios::mdlActualizarIntentosFallidos($tabla, $intentos_fallidos, $respuesta['token']);

                            echo '<script> if( window.history.replaceState ){
                            window.history.replaceState( null, null, window.location.href );

                            window.location = "inicio";

                            } </script>';

                        } else {

                            if($respuesta['intentos_fallidos'] < 3 ){
                                $intentos_fallidos = $respuesta['intentos_fallidos'] + 1;
                                ModeloFormularios::mdlActualizarIntentosFallidos($tabla, $intentos_fallidos, $respuesta['token']);
                            }else{
                                    echo '<div class="alert alert-warning" >Ha superado el numero maximo de intentos</div>';
                            }



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