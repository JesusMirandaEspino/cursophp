<?php


require_once('conexion.php');

Class BlogModel {


    /*******************************
     *  Mostrar contenido de BLog
     *******************************/
    static public function mdlShowBlog($tabla){
        $stament = Conexion::conect()->prepare( "SELECT * FROM $tabla" );

        $stament->execute();

        return $stament->fetch();

        $stament = null;


    }   


}



?>