<?php

session_start();



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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- **************************  -->
    <!-- **************************  -->

    <script src="https://use.fontawesome.com/f62da5b59f.js"></script>

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

            <!----------------------------------------------->
            <!--                  Logo                     -->
            <!----------------------------------------------->
            <div class="contenedor1">
                <div class="col-full-12 container-fluid" id="salida">
                    <h1 class="text-center py-3">Logo</h1>
                </div>
            </div>

            <!----------------------------------------------->
            <!--              Botonera                     -->
            <!----------------------------------------------->
            <div class="contenedor1">
                <div class="col-full-12 container-fluid bg-light" id="salida">
                    <ul class="nav nav-justified py-2 nav-pills">


                        <?php if (isset($_GET['pages'])) :   ?>

                            <?php if ($_GET['pages'] == 'registro') :   ?>
                                <li class="nav-item">
                                    <a class="nav-link active" class="" href="registro">Registro</a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" class="" href="registro">Registro</a>
                                </li>
                            <?php endif   ?>


                            <?php if ($_GET['pages'] == 'ingreso') :   ?>
                                <li class="nav-item">
                                    <a class="nav-link active" class="" href="ingreso">Ingreso</a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" class="" href="ingreso">Ingreso</a>
                                </li>
                            <?php endif   ?>


                            <?php if ($_GET['pages'] == 'inicio') :   ?>
                                <li class="nav-item">
                                    <a class="nav-link active" class="" href="inicio">Inicio</a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" class="" href="inicio">Inicio</a>
                                </li>
                            <?php endif   ?>

                            <?php if ($_GET['pages'] == 'salir') :   ?>
                                <li class="nav-item">
                                    <a class="nav-link active" class="" href="salir">Salir</a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" class="" href="salir">Salir</a>
                                </li>
                            <?php endif   ?>


                        <?php else : ?>

                            <li class="nav-item">
                                <a class="nav-link active" class="" href="registro">Registro</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="" href="ingreso">Ingreso</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="" href="inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="" href="salir">Salir</a>
                            </li>
                            
                        <?php endif   ?>






                    </ul>
                </div>
            </div>


            <!----------------------------------------------->
            <!--             Contenido                     -->
            <!----------------------------------------------->
            <div class="contenedor1 mt-5">

                <div class="col-full-12">

                    <?php

                    if (isset($_GET['pages'])) {

                        $pages = $_GET['pages'];

                        if ($pages == 'inicio'  || $pages == 'registro' || $pages == 'ingreso' || $pages == 'salir' || $pages == 'editar' ) {
                            include 'pages/' . $pages . '.php';
                        }else{
                            include 'pages/error404.php';
                        }
                    } else {
                        include 'pages/registro.php';
                    }



                    ?>

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