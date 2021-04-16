<?php


// forma antigua de conectar

//$conexion = mysql_connect(  'localhost', 'root', '' )  or die();

// mysql_select_db('prueba', $conexion);

//$rest =  mysql_query('SELECT * FROM usuarois' );


// $fila = mysql_fetch_object( $rest );


//while(  $fila = mysql_fetch_object( $rest ) ){ echo $fila->nombre; }


//TODO PDO

try{
    $conexion = new PDO( 'mysql:host=localhost; dbname=prueba_datos', 'root', ''  );
    echo 'conexion realizada';

//$results = $conexion->query('SELECT * FROM usuarios');

$insertar = $conexion->query('INSERT INTO usuarios VALUES(null, "Mursi", "test4@dominio.com")');

 /*   foreach($results as $res){
        print_r($res);
    }*/


}catch( PDOException $e)
{
    echo 'El error: ' . $e->getMessage();
}




?>

<!DOCTYPE html>
<html lang="es">

<head>

    <!-- **************************  -->
    <!-- **************************  -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Jesus Miranda">
    <!-- **************************  -->
    <!-- **************************  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="INDEX,FOLLOW">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/responsivo.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="icon" type="image/png" href="">
    <!-- **************************  -->
    <!-- **************************  -->
    <title></title>


</head>

<body>

    <!-- **************************  -->
    <!-- **************************  -->
    <header>



    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>

    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>



</body>

</html>