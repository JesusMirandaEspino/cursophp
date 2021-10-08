<?php

    if( isset( $_FILES['archivos'] ) ){
        $msg = '';

        for ($i=0; $i < count($_FILES['archivos']['name']); $i++) { 
            $archivo = $_FILES['archivos'];
            $nombre = $archivo['name'][$i];
            $tmp = $archivo['tmp_name'][$i];
            $size = $archivo['size'][$i];
            $tipo = $archivo['type'][$i];
            $dim = getimagesize( $tmp );
            $w = $dim[0];
            $h = $dim[1];
            $carpeta = 'assets/img/photos/';

            if ( $tipo == 'img/jpeg' ||  $tipo == 'img/jpg' || $tipo == 'img/png' || $tipo == 'img/gif'  ) {

                copy($archivo, $carpeta . $nombre . 'png');


            //  mover archivo move_uploaded_file( $tmp, $carpeta.$nombre  );

                echo 'Se subio el archivo' . $nombre . '<br/>';


            }else{
                echo 'No se pudo subir archivo' . $nombre . '<br/>';
            }


        }

    }


$img = @imagecreatefromjpeg( './assets/img/photos/1.png' );



if ( !$img  ) {
    $img = imagecreatetruecolor( 200, 100 );
    $color1 = imagecolorallocate( $img, 255, 255, 0 );
    $color2 = imagecolorallocate( $img, 255, 255, 255 );

    imagefilledrectangle(  $img, 0, 0, 200, 100, $color1 );
    imagestring( $img, 3, 10, 10, 'No existe la imagen', $color2  );

    header('Contet-type: image/png');

    imagepng(  $img  );

    imagedestroy( $img );

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
    <title>Imagenes</title>


</head>

<body>


    <!-- **************************  -->
    <!-- **************************  -->
    <header>



        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12">

                    <form enctype="multipart/form-data" action="index.php" method="POST">

                        <label for="archivos[]" > Subir Varias Imagenes </label>
                        <input type="file" name="archivos[]" id=""  multiple>

                        <input type="submit" value="Subir Archivos">


                    </form>

                </div>

                <div class="col-full-12">

                </div>

            </div>

        </section>





    </header>


    <!-- **************************  -->
    <!-- **************************  -->
    <main>




    </main>


    <!-- **************************  -->
    <!-- **************************  -->
    <footer>


    </footer>

    <script src="assets/js/app.js"></script>

</body>

</html>