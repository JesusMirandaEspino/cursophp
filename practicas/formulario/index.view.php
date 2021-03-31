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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/responsivo.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
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

        <section class="fila title">
            <div class="contenedor1">
                <div class="col-full-12">
                    <h1>Formulario</h1>
                </div>
            </div>
        </section>



    </header>





    <!-- **************************  -->
    <!-- **************************  -->
    <main>

        <section class="fila">

            <form action=" <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>  " method="post" class="contenedor1">

                <div class="col-full-12">
                    <label for="nameuser">Nombre</label>
                </div>
                <div class="col-full-12">
                    <input type="text" id="nameuser" name="nameuser" placeholder="Nombre">
                </div>

                <div class="col-full-12">
                    <label for="emailuser">Correo</label>
                </div>
                <div class="col-full-12">
                    <input type="email" id="emailuser" name="emailuser" placeholder="Correo">
                </div>

                <div class="col-full-12 ">
                    <textarea name="menssage" id="menssage" cols="30" rows="10"></textarea>
                </div>


                <?php if (!empty($errores)) :   ?>
                    <div class="col-full-12  error">
                        <?php echo $errores; ?>
                    </div>

                <?php elseif ($enviado) : ?>
                    <div class="col-full-12  sucess">
                        <P>Enviado Correctamente</P>
                    </div>
                <?php endif ?>





                <div class="col-full-12  alert">
                    <P>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Corporis accusantium dignissimos iure sed iste impedit assumenda,
                        eligendi velit quaerat eaque ipsum et nulla totam, cum eos placeat nemo. Veritatis, harum.
                    </P>
                </div>

                <div class="col-full-12">
                    <input type="submit" value="Enviar" name="submit">
                </div>



            </form>


        </section>




    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>

    </footer>
</body>

</html>