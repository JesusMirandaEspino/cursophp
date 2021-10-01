<?php

    // Leemos  la imagen

    $imagen = imagecreatefromjpeg( './assets/img/photos/1.png'  );
    $black = '0X000000';

    //  marca de agua
    $marca = imagecreatetruecolor( 630, 40 );
    imagefilledrectangle(  $marca, 3,20, 12, 'Imagen de mi esposita, un dibujito', $black );

    // margenes  
    $md = 10;
    $mi = 10;
    $sx = imagesx( $marca );
    $sy = imagesy( $marca );
    $ix = imagesx( $imagen );
    $iy = imagesx( $imagen );


    // Fusionar ambas Imagenes
    imagecopymerge( $imagen, $marca, $ix - $sx - $md, $iy - $sy - $mi, 0, 0, $sx, $sy, 50 );

    //Creamos el archivo
    imagepng( $imagen, 'fotomarca.png' );

    // Liberamos la memoria
    imagedestroy( $imagen );


    $img = imagecreatefromjpeg('./assets/img/photos/1.png');
    $ancho = $alto = 160;

    // Renglones
    for ($j = 0; $j < 3; $j++) { 
        for ($i = 0; $i < 4; $i++) { 
            $destino = imagecreatetruecolor( $ancho, $alto );
            imagecopyresampled( $destino, $img, 0, 0, $ancho*$i, $alto*$j, $ancho, $alto, $ancho, $alto );
        }
    }

    imagejpeg( $destino, 'salida'.$i.'-'.$j.'jpg'   );


    imagedestroy( $img );
    imagedestroy( $destino );




    $imagenCadena = imagecreatefromstring( file_get_contents( './assets/img/photos/1.png' ) );

    $w = imagesx( $imagenCadena );
    $h = imagesy( $imagenCadena );

    $w2 = $h2 = 400;

    $nuevaImagen = imagecreate( $w, $h );

    // Se activa el blend
    imagealphablending( $nuevaImagen, true );

    // Se copia la imagen
    imagecopyresampled( $nuevaImagen, $imagenCadena, $w2, $h2, 0, 0, 0, 0, $w2, $h2, $w, $h  );

    // Se crea la mascara
    $nuevaMascara = imagecreatetruecolor( $w2, $h2 );

    // Definir el color de la transparencia
    $tranferencia = imagecolorallocate( $mascar, 255, 0, 0 );

    // Definir el color de la transparencia
    imagecolortransparent( $nuevaImagen, $transparencia );

    // Creamos el elipse
    imagefilledellipse( $nuevaMascara, $w/2, $h2/2, $w2, $h2, $transparencia );

    // Creamos el color negro
    $negro = imagecolorallocate( $nuevaMascara, 0, 0, 0  );

    //Mezclamos los objetos
    imagecopymerge( $nuevaImagen, $nuevaMascara, 0, 0, 0, 0, $w2, $h2, 100 );

    //Definimos el color a eliminar
    imagecolortransparent( $nuevaImagen, $negro );

    // Rellenamos la imagen
    imagefill( $nuevaImagen, 0, 0, $negro );

    // Creamos el archivos
    imagepng( $nuevaImagen );

    //Limpiamos los objetos
    imagedestroy( $nuevaImagen );
    imagedestroy( $nuevaMascara );

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