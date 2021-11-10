<?php

    require_once( 'conexion.php' );


    class ModeloFormularios{

        /**********************************/
        /**            Registro          **/
        /**********************************/

        static public function mdlRegistro( $tabla, $datos ){

            // Statement::Declaracion

            $statement = Conexion::conect()->prepare("INSERT INTO $tabla(nombre, email, password ) VALUES( :nombre, :email, :password ) ");

            $statement->bindParam( ":nombre", $datos['nombre'], PDO::PARAM_STR );
            $statement->bindParam(":email", $datos['email'], PDO::PARAM_STR);
            $statement->bindParam(":password", $datos['password'], PDO::PARAM_STR);


            if( $statement->execute() ){
                return 'ok';
            }else{
                print_r( Conexion::conect()->errorInfo() );
            }


            $statement = null;


        }

    }

?>