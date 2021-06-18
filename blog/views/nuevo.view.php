<!DOCTYPE html>
<html lang="es">

<head>

    <!-- **************************  -->
    <!-- **************************  -->
    <meta charset="UTF-8">
    <meta name="description" content="Curso de php blog">
    <meta name="keywords" content="">
    <meta name="author" content="Jesus Miranda">
    <!-- **************************  -->
    <!-- **************************  -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="robots" content="INDEX,FOLLOW">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/all.css">
    <link rel="stylesheet" href="../assets/css/reset.css">
    <link rel="stylesheet" href="../assets/css/responsivo.css">
    <link rel="stylesheet" href="../assets/css/estilos.css">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="icon" type="image/png" href="">
    <!-- **************************  -->
    <!-- **************************  -->
    <title>Blog</title>


</head>

<body>

    <!-- **************************  -->
    <!-- **************************  -->
    <header>

        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-4">

                    <h1><a href="<?php echo 'http://localhost/cursophp/blog/'; ?>">Mi Blog</a></h1>

                </div>

                <div class="col-full-4">
                    <form action="<?php echo 'http://localhost/cursophp/blog/';  ?>/buscar.php" method="get">
                        <input type="text" name="busqueda" id="" placeholder="Buscar">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>

                <div class="col-full-4">

                    <nav>

                        <ul>
                            <li><a href=""><i class="fab fa-twitter"></i></a></li>
                            <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="">Contacto <i class="far fa-envelope"></i> </a></li>
                        </ul>

                    </nav>

                </div>

            </div>

        </section>

    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>


        <form enctype="multipart/form-data" method="post" action="<?php echo   htmlspecialchars($_SERVER['PHP_SELF']); ?>" class=" fila">

            <div class="contenedor1">


                <div class="col-full-12">
                    <label for="titulo">Titulo</label>
                </div>

                <div class="col-full-12">
                    <input type="text" name="titulo" id="titulo" placeholder="Titulo">
                </div>

            </div>


            <div class="contenedor1">

                <div class="col-full-12">
                    <label for="extracto">Extracto de articulo</label>
                </div>

                <div class="col-full-12">
                    <input type="text" name="extracto" id="extracto" placeholder="Extracto">
                </div>


            </div>

            <div class="contenedor1">

                <div class="col-full-12">
                    <textarea name="texto"></textarea>
                </div>
            </div>


            <div class="contenedor1">
                <div class="col-full-12">
                    <input type="submit" value="Crear Articulo">
                </div>
            </div>

        </form>





    </main>





    <?php require('footer.php'); ?>