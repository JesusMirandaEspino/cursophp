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

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="icon" type="image/png" href="">
    <!-- **************************  -->
    <!-- **************************  -->
    <title>Galeria</title>


</head>

<body>

    <!-- **************************  -->
    <!-- **************************  -->
    <header>


        <section class="fila">

            <div class="contenedor1">


                <div class="col-full-12">

                    <h1>Galeria. Usando PHP y Mysql</h1>

                </div>

            </div>

        </section>

    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>

        <section class="fila">

            <div class="contenedor1">
                <div class="col-full-12">
                    <h2>Fotos</h2>
                </div>
            </div>


            <div class="contenedor1">

                <?php foreach ($fotos as $foto) :   ?>

                    <div class="col-full-3">

                        <a href="foto.php?id=<?php echo $foto['id']; ?>">
                            <img src="photo/<?php echo $foto['imagen']; ?>" alt="Foto1">
                        </a>


                    </div>

                <?php endforeach; ?>

            </div>


            <div class="contenedor1">
                <div class="col-full-6">




                    <i class="fas fa-arrow-left"></i>
                    <p>Pagina anterior</p>

                </div>

                <div class="col-full-6">

                    <p>Pagina siguiente</p>
                    <i class="fas fa-arrow-right"></i>

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