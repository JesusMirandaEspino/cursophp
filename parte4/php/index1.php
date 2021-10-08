<?php

require_once('./assets/php/connect.php');

$td1 = '<td>';
$td2 = '</td>';




/*  comentado para evitar modificar la base de datos

    $pregunta =  mysql_real_escape_string( $conn ,'¿Cual es la 'capital' de Mexico'); 

    $op1 =  mysql_real_escape_string( $conn ,'Monterrey');
    $op2 = mysql_real_escape_string( $conn ,'Lima') ;
    $op3 = mysql_real_escape_string( $conn ,'Buenos Aires') ;
    $op4 = mysql_real_escape_string( $conn ,'Distrito Federal') ;

    $res = '3';

    $examen = 'GEO01';


    // armar el query


    $q = "INSERT INTO preguntas ( id, pregunta, op1, op2, op3, op4, buena, examen ) ";
    $q.= "VALUES( 0, '".$pregunta."','".$op1."','". $op2."','".$op3."','" . $op4."' , '" . $res."' , '" . $examen. "')";

    $res = mysqli_query( $conn, $q );

    if( $res ){
        echo 'Registro insertado correctamente' . '<br/>'   ;
    }else{
        echo 'Error al tratar de insertar el registro';
    }

    
    $q = "DELETE FROM preguntas WHERE id = 2";
    $res = mysqli_query($conn, $q);

    if ($res) {
        echo 'Registro elimino correctamente el registro 2' . '<br/>';
    } else {
        echo 'Error al tratar de borrar el registro 2';
    }


    $q = "UPDATE preguntas set op1 = 'Estado de Mexico' WHERE id = 7";
    $res = mysqli_query($conn, $q);

    if ($res) {
        echo 'Registro correctamente cambiado' . '<br/>';
    } else {
        echo 'Error al tratar de modificar registro';
    }

*/


$q = "SELECT * FROM  preguntas";

$resp = $conn->query( $q );


$result = $resp->fetchAll();



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
    <title>My SQL Connect</title>


</head>

<body>


    <!-- **************************  -->
    <!-- **************************  -->
    <header>



        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">

                        <?php

                            echo '<table>';

                            foreach($result as $data ){

                                echo '<tr>';
                                    echo $td1 .  $data["pregunta"]  .   $td2;
                                    echo $td1 .  $data["op1"]       .   $td2;
                                    echo $td1 .  $data["op2"]       .   $td2;
                                    echo $td1 .  $data["op3"]       .   $td2;
                                    echo $td1 .  $data["op4"]       .   $td2;
                                    echo $td1 .  $data["buena"]     .   $td2;
                                    echo $td1 .  $data["examen"]    .   $td2;
                                echo '</tr>';

                                }

                            echo '</table>';

                        ?>

                </div>

                <div class="col-full-12">

                </div>

            </div>

        </section>





    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>

    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>

    <script src="assets/js/app.js"></script>

</body>

</html>