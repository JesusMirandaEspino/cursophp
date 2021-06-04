<?php require('header.php');  ?>


<!-- **************************  -->
<!-- **************************  -->
<main>

    <?php foreach ($posts as $post) :  ?>

        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-4"></div>

                <article class="col-full-8">
                    <h2><a href="">Titulo del articulo</a> </h2>
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
    <?php endforeach; ?>


    <section class="fila">
        <div class="contenedor1">
            <div class="col-full-12">
                <?php require('paginacion.php'); ?>
            </div>
        </div>
    </section>







</main>


<!-- **************************  -->
<!-- **************************  -->
<?php require('footer.php'); ?>



</body>

</html>