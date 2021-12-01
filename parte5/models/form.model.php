<?php

    require_once( 'conexion.php' );


    class ModeloFormularios{

        /**********************************/
        /**            Registro          **/
        /**********************************/

        static public function mdlRegistro( $tabla, $datos ){

            // Statement::Declaracion

            $statement = Conexion::conect()->prepare("INSERT INTO $tabla(token, nombre, email, password ) VALUES( :token, :nombre, :email, :password ) ");

            $statement->bindParam(":token", $datos['token'], PDO::PARAM_STR); 
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


        static public function mdlSeleccionarRegistros($tabla, $item, $valor){

            if(  $item == null && $valor == null ){

                $statement = Conexion::conect()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla ORDER BY id DESC");

                

                $statement->execute();

                return $statement->fetchAll();

            }else{
                $statement = Conexion::conect()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha 
                                                            FROM $tabla  WHERE $item = :$item ORDER BY id DESC");

                $statement->bindParam(":" . $item, $valor, PDO::PARAM_STR);
                
                $statement->execute();

                return $statement->fetch();  
            }



        }

        /**********************************/
        /**           Actualizar         **/
        /**********************************/
        static public function mdlActualizarRegistro($tabla, $datos){

            $statement = Conexion::conect()->prepare("UPDATE  $tabla SET nombre=:nombre, email=:email, password=:password WHERE token = :token");

            $statement->bindParam(":nombre", $datos['nombre'], PDO::PARAM_STR);
            $statement->bindParam(":email", $datos['email'], PDO::PARAM_STR);
            $statement->bindParam(":password", $datos['password'], PDO::PARAM_STR);
            $statement->bindParam(":token", $datos['token'], PDO::PARAM_STR);

            if ($statement->execute()) {
                return 'ok';
            } else {
                print_r(Conexion::conect()->errorInfo());
            }


            $statement = null;
            }


        /**********************************/
        /**            Eliminar          **/
        /**********************************/
        static public function mdliminarRegistro($tabla, $valor){

            $statement = Conexion::conect()->prepare("DELETE FROM  $tabla WHERE token = :token ");


            $statement->bindParam(":token", $valor, PDO::PARAM_INT);

            if ($statement->execute()) {
                return 'ok';
            } else {
                print_r(Conexion::conect()->errorInfo());
            }


            $statement = null;
        }


    /************************************/
    /**  Actualizar Intentos Fallidos  **/
    /************************************/
    static public function mdlActualizarIntentosFallidos($tabla, $valor, $token)
    {

        $statement = Conexion::conect()->prepare("UPDATE  $tabla SET intentos_fallidos=:intentos_fallidos  WHERE token = :token");

        $statement->bindParam(":intentos_fallidos", $valor, PDO::PARAM_INT);
        $statement->bindParam(":token", $token, PDO::PARAM_STR);


        if ($statement->execute()) {
            return 'ok';
        } else {
            print_r(Conexion::conect()->errorInfo());
        }


        $statement = null;
    }




    }

?>