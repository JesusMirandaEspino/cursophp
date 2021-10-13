<?php

    $user = 'root';
    $pass = '';

    $td1 = '<td>';
    $td2 = '</td>';

    $th1 = '<th>';
    $th2 = '</th>';

    $tpaginas = 10;
    $maxPaginas = 5;

    try{
        $conn = new PDO('mysql:host=localhost;dbname=escuela', $user, $pass);
        echo 'conexion existosa' . '<br/>';
        

    }catch(PDOException $e){

        echo 'Error al conectar a la base de datos' . $e->getMessage();

    }


    $q = "SELECT * FROM  alumnos";
    $qc = "SELECT COUNT(*) as reg FROM  alumnos";

    $resp = $conn->query( $q );


    $result = $resp->fetchAll();


    if( isset($_GET['p']) ){
        $pagina = $_GET['p'];
    }else{
        $pagina = 1;
    }

    $inicio = ($pagina - 1) * $tpaginas;




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

                            echo '<tr>';
                                echo $th1 .  'Id'         .   $th2;
                                echo $th1 .  'Nombre'     .   $th2;
                                echo $th1 .  'Apellidos'  .   $th2;
                                echo $th1 .  'Nacimiento' .   $th2;
                                echo $th1 .  'Promedio'   .   $th2;
                                echo $th1 .  'Sexo'       .   $th2;
                                echo $th1 .  'Id Escuela' .   $th2;
                                echo $th1 .  'Id Salon'   .   $th2;
                                echo $th1 .  'Id Curso'   .   $th2;
                            echo '</tr>';

                            foreach($result as $data ){

                                echo '<tr>';
                                    echo $td1 .  $data["id"]         .   $td2;
                                    echo $td1 .  $data["nombre"]     .   $td2;
                                    echo $td1 .  $data["apellidos"]  .   $td2;
                                    echo $td1 .  $data["nacimiento"] .   $td2;
                                    echo $td1 .  $data["promedio"]   .   $td2;
                                    echo $td1 .  $data["sexo"]       .   $td2;
                                    echo $td1 .  $data["idEscuela"]  .   $td2;
                                    echo $td1 .  $data["idSalon"]    .   $td2;
                                    echo $td1 .  $data["idCurso"]    .   $td2;
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