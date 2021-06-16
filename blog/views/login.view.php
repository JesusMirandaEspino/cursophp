<?php require('header.php');  ?>


<section class="fila">

    <div class="contenedor1">
        <div class="col-full-12">
            <h1>Inciar Session</h1>
        </div>
    </div>



    <form class="contenedor1"  method="post" action="<?php echo   htmlspecialchars($_SERVER['PHP_SELF']);?> ">

        <div class="col-full-12">
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario">
        </div>

        <div class="col-full-12">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
        </div>

        <div class="col-full-12">
            <input type="submit" value="Entrar">
        </div>

    </form>
    
</section>



<?php require('footer.php');


?>