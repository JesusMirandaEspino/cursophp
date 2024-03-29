<?php

$blog = BlogController::ctrShowBlog();

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo $blog['descripcion'];  ?> ">

    <?php    
    


    $palabarsClaves = json_decode( $blog['palabras_claves']  );


    $palabras = '';

    foreach($palabarsClaves as $key => $value ){
        $palabras .= $value . '. ';
    }

    $palabras = substr($palabras, 0, -2 );


    ?>


    <meta name="keywords" content="<?php echo $palabras ?> ">

    <title> <?php echo $blog['titulo']  ?> </title>

    <link rel="icon" href="img/icono.jpg">

    <!--=====================================
	PLUGINS DE CSS
	======================================-->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css?family=Chewy|Open+Sans:300,400" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.0/css/all.css" integrity="sha384-aOkxzJ5uQz7WBObEZcHvV5JvRW3TUc2rNPA7pe3AwnsUohiw1Vj2Rgx2KSOkF5+h" crossorigin="anonymous">

    <!-- JdSlider -->
    <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
    <link rel="stylesheet" href="assets/css/plugins/jquery.jdSlider.css">

    <link rel="stylesheet" href="assets/css/estilos.css">

    <!--=====================================
	PLUGINS DE JS
	======================================-->

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

    <!-- JdSlider -->
    <!-- https://www.jqueryscript.net/slider/Carousel-Slideshow-jdSlider.html -->
    <script src="assets/js/plugins/jquery.jdSlider-latest.js"></script>

    <!-- pagination -->
    <!-- http://josecebe.github.io/twbs-pagination/ -->
    <script src="assets/js/plugins/pagination.min.js"></script>

    <!-- scrollup -->
    <!-- https://markgoodyear.com/labs/scrollup/ -->
    <!-- https://easings.net/es# -->
    <script src="assets/js/plugins/scrollUP.js"></script>
    <script src="assets/js/plugins/jquery.easing.js"></script>

</head>

<body>


    <?php

    /**********************************************
            Modulos fijos Superiores
     ***********************************************/
    include 'pages/modules/header.php';
    include 'pages/modules/net-social-movile.php';
    include 'pages/modules/movile-search.php';
    include 'pages/modules/menu.php';

    /**********************************************
                Modulo para Navegar
     ***********************************************/
    include 'pages/home.php';

    /**********************************************
                    Modulo fijo inferior
     ***********************************************/
    include 'pages/modules/footer.php';

    ?>



    <script src="assets/js/script.js"></script>


</body>

</html>