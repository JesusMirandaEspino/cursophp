<?php require('header.php');  ?>


<!-- **************************  -->
<!-- **************************  -->
<main>

    <section class="fila">

        <div class="contenedor1">

            <div class="col-full-4"></div>

            <article class="col-full-8">
                <h2><?php echo $post['titulo'];  ?></h2>
                <p><?php echo fecha($post['fecha'] );  ?></p>
            </article>

            <div class="col-full-1"></div>

        </div>


        <div class="contenedor1">
            <div class="col-full-4"></div>

            <div class="col-full-7">
                <a href="">
                    <img src="<?php echo   'http://localhost/cursophp/blog';  ?>/assets/update/<?php echo $post['thumb'];?>" alt="<?php echo $post['titulo'];?>">
                </a>
            </div>

            <div class="col-full-1"></div>

        </div>

        <div class="contenedor1">
            <div class="col-full-4"></div>
            <div class="col-full-7">
                <p><?php echo nl2br( $post['texto']);?></p>
            </div>
            <div class="col-full-1"></div>

        </div>




    </section>



</main>


<!-- **************************  -->
<!-- **************************  -->
<?php require('footer.php'); ?>



</body>

</html>