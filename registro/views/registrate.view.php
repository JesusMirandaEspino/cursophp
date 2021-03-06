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
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,300;0,400;0,500;0,700;0,900;1,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/responsivo.css">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <!-- **************************  -->
    <!-- **************************  -->
    <link rel="icon" type="image/png" href="">
    <!-- **************************  -->
    <!-- **************************  -->
    <title>Registrate</title>





</head>

<body>

    <!-- **************************  -->
    <!-- **************************  -->
    <header>

        <section class="fila">
            <div class="contenedor1">
                <div class="col-full-12">
                    <h1 class="title">Registrate</h1>
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


                <div class=" col-full-4  ">
                    <div class="close-session">

                    </div>
                </div>

                <div class="col-full-4"></div>

            </div>


            <div class="contenedor1">

                <div class="col-full-4"></div>

                <article class="col-full-4  form-container">

                    <form class="form-registrate" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']);  ?>" method="POST" name="login">

                        <div class="input-container">

                            <div class="btn-icon">
                                <i class="fas fa-user"></i>
                            </div>

                            <div class="input-box">
                                <input type="text" name="usuario" id="" placeholder="Nombre">
                            </div>

                        </div>

                        <div class="input-container">

                            <div class="btn-icon">
                                <i class="fas fa-lock"></i>
                            </div>

                            <div class="input-box">
                                <input type="password" name="password" id="" placeholder="Contrase??a">
                            </div>


                        </div>

                        <div class="input-container">

                            <div class="btn-icon">
                                <i class="fas fa-lock"></i>
                            </div>

                            <div class="input-box-repeat">
                                <input type="password" name="password2" id="" placeholder="Repite la Contrase??a">
                            </div>

                            <div class="btn-go">
                                <i class="fas fa-arrow-right" onclick="login.submit()"></i>
                            </div>

                        </div>


                        <?php  if(!empty($errores)): ?>
                            <div class="error" >
                                <ul>
                                    <?php  echo $errores ?>
                                </ul>
                            </div> 
                        <?php  endif; ?>


                    </form>

                </article>

                <div class="col-full-4"></div>

            </div>
        </section>


        <section class="fila">

            <div class="contenendor1">

                <div class="col-full-12 session">
                    <p>??Ya tienes cuenta?</p>
                </div>

                <div class="col-full-12 session">
                    <a href="./login.php">Inicia Session</a>
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