<?php

require( '../models/blogModels.php' );


    Class BlogController{


        /*******************************
         *  Mostrar contenido de BLog
         *******************************/

        static public function ctrShowBlog(){

            $tabla = 'blog';

            $respons = BlogModel::mdlShowBlog($tabla);

            return $respons;

        }

    }




?>