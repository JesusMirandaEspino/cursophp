<?php 

    session_start();

    if ( isset($_SESSION['usuario']) ) {
        header('Location: index.php');
    } 

    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        $usuario =  filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING );
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

    
        echo $usuario .  $password . $password2;


    }



    require('views/registrate.view.php');

?>