<?php require('header.php');  ?>


<!-- **************************  -->
<!-- **************************  -->
<main>

    <?php foreach ($posts as $post) :  ?>

        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-4"></div>

                <article class="col-full-8">
                    <h2><a href=""><?php echo $post['titulo']; ?></a> </h2>
                    <p><?php echo $post['fecha']; ?></p>
                </article>

                <div class="col-full-1"></div>

            </div>


            <div class="contenedor1">
                <div class="col-full-4"></div>

                <div class="col-full-7">
                    <a href="">
                        <img src="<?php echo  RUTA;  ?>/assets/update/<?php echo $post['thumb']; ?>" alt="no image">
                    </a>
                </div>

                <div class="col-full-1"></div>

            </div>

            <div class="contenedor1">
                <div class="col-full-4"></div>
                <div class="col-full-7">
                    <p><?php echo $post['extracto']; ?></p>
                </div>
                <div class="col-full-1"></div>
                <div class="col-full-4"></div>
                <div class="col-full-7">
                    <a href="">Continuar leyendo</a>
                </div>
                <div class="col-full-1"></div>
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