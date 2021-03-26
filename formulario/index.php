<?php   

/*
    if( $_POST ){
        if($_SERVER['REQUEST_METHOD']  == 'GET') {
            echo 'Se enviaron los datos por metodo GET';
        }else{
            echo 'Se enviaron los datos por metodo POST';
        }
    }
*/

if( isset( $_POST['submit'] ) ){
    echo 'Se han enviado los datos';
}



?>


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



    </header>





    <!-- **************************  -->
    <!-- **************************  -->
    <main>

        <section class="fila">

            <form action=" <?php  echo htmlspecialchars( $_SERVER['PHP_SELF']  ) ?>  " method="post" class="contenedor1">

                <div class="col-full-12">
                    <label for="nameuser">Nombre</label>
                    <input type="text" id="nameuser" name="nameuser">
                </div>

                <div class="col-full-12">
                    <label for="man">Masculino</label>
                    <input type="radio" name="sextype" id="man" value="man">
                    <label for="woman">Femenino</label>
                    <input type="radio" name="sextype" id="woman" value="woman">
                </div>

                <div class="col-full-12">
                    <select name="year" id="year">
                        <option value="2000">2000</option>
                        <option value="2001">2001</option>
                        <option value="2002">2002</option>
                        <option value="2003">2003</option>
                    </select>
                </div>


                <div class="col-full-12">
                    <label for="terms">Acepto Terminos y Condiciones</label>
                    <input type="checkbox" name="terms" id="temrs" value="ok">
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