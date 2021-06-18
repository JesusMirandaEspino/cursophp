<?php
session_start();

require('config.php');
require('function.php');




if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario =  limpiardatos( $_POST['usuario'] );
    $password =  limpiardatos( $_POST['password']);



    if( $usuario == $blog_admin['user']  &&  $password ==  $blog_admin['password']  ){
        $_SESSION['admin'] = $blog_admin['user'];
        header('Location: http://localhost/cursophp/blog/admin');
    }


}

require('views/login.view.php');





?>