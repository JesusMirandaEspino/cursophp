<?php


if( isset($_COOKIE['font-size']) ){
    $tamano = $_COOKIE['font-size'];
}else{
    $tamano = '15px;';
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


    <style>
        p {
            font-size: <?php echo $tamano; ?>;
        }
    </style>


</head>

<body>

    <!-- **************************  -->
    <!-- **************************  -->
    <header>

        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Deleniti voluptas voluptatum unde,
            ipsum nostrum quas consequuntur earum provident saepe debitis,
            temporibus atque obcaecati facilis dicta, harum excepturi minima dignissimos at.
        </p>


        <a href="cookies.php"> Volver </a>


    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>

    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>



</body>

</html>