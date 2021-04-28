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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700;800&display=swap" rel="stylesheet">
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

        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">

                    <h1> Articulos </h1>

                </div>

            </div>

        </section>



    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>

        <section class="fila  articulos ">
            <div class="contenedor1">
                <div class="col-full-12">
                    <ul class="list-item">
                        <?php foreach ($articulos as $articulo) : ?>
                            <li class="item"> <?php echo $articulo['id'] . '.- ' . $articulo['texto'] ?> </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </section>


        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">

                    <ul class="btn-list">

                        <?php if ($pagina == 1) :  ?>
                            <li class="disabled btn-page"><a href="">&laquo;</a></li>
                        <?php else : ?>
                            <li class="btn-page"><a href="?pagina=<?php echo $pagina - 1; ?>">&laquo;</a></li>
                        <?php endif; ?>


                        <?php
                        for ($i = 1; $i <= $numeroPaginas; $i++) {
                            if ($pagina == $i) {
                                echo "<li class='active btn-page'><a href='?pagina=$i'>$i</a></li>";
                            } else {
                                echo "<li class='btn-page'><a href='?pagina=$i'>$i</a></li>";
                            }
                        }
                        ?>


                        <?php if ($pagina == $numeroPaginas) :  ?>
                            <li class="disabled btn-page"><a href="">&raquo;</a></li>
                        <?php else : ?>
                            <li class="btn-page"><a href="?pagina=<?php echo $pagina + 1; ?>">&raquo;</a></li>
                        <?php endif; ?>



                        <!--
                        <li class="btn-page"><a href="">2</a></li>
                        <li class="btn-page"><a href="">3</a></li>
                        <li class="btn-page"><a href="">4</a></li>
                        <li class="btn-page"><a href="">&raquo;</a></li>-->
                    </ul>

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