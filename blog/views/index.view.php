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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun--scale=1.0, minimum--scale=1.0">
    <meta name="robots" content="INDEX,FOLLOW">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/all.css">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/responsivo.css">
    <link rel="stylesheet" href="./assets/css/estilos.css">
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
                    <h1>Mi Blog</h1>
                </div>

                <div class="col-full-4">
                    <form action="<?php echo RUTA;  ?>/buscar.php" method="get">
                        <input type="text" name="nusqueda" id="" placeholder="Buscar">
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

        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-4"></div>

                <article class="col-full-8">
                    <h2>Titulo del articulo</h2>
                    <p>Fecha: 01 06 2021</p>
                </article>

                <div class="col-full-1"></div>

            </div>


            <div class="contenedor1">
                <div class="col-full-4"></div>

                <div class="col-full-7">
                    <a href="">
                        <img src="<?php echo  RUTA;  ?>/assets/update/1.jpg" alt="no image">
                    </a>
                </div>

                <div class="col-full-1"></div>

            </div>

            <div class="contenedor1">
                <div class="col-full-12">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit</p>
                </div>
                <div class="col-full-12">
                    <a href="">Continuar leyendo</a>
                </div>
            </div>

        </section>



    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>



</body>

</html>