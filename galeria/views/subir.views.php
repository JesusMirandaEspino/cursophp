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
                    <h2>Subir foto</h2>
                </div>
            </div>

            <div class="contenedor1">
                <div class="col-full-12">
                    <form method="post" enctype="multipart/form-data" action="<?php echo   htmlspecialchars($_SERVER['PHP_SELF']); ?>">

                        <div>
                            <label for="foto">Selecciona una foto</label>
                            <input type="file" id="foto" name="foto">
                        </div>


                        <div>
                            <label for="titulo">Agrega un titulo</label>
                            <input type="text" id="titulo" name="titulo">
                        </div>

                        <div>
                            <label for="texto">Agrega una descripcion</label>
                            <textarea name="texto" id="texto" placeholder="Ingresa una descripcion"></textarea>
                        </div>

                        <?php if( isset($error) ): ?>

                            <p> <?php  echo $error; ?> </p>

                        <?php endif ?>

                        <div>
                            <input type="submit" value="Subir Foto">
                        </div>


                    </form>
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