<?php

    if( is_uploaded_file( $_FILES['foto']['tmp_name'] ) ){
        $nombre = 'foto'.date( 'YmdHis' );
        $errores_array = array();
        $fileTmp = $_FILES['foto']['tmp_name'];
        $fileName = $_FILES['foto']['name'];
        $fileSize = $_FILES['foto']['size'];
        $fileType = $_FILES['foto']['type'];
        $fileExt = strtolower( end( explode( '.', $fileName ) ) );

        $extensiones = array( 'jpg', 'png', 'jpeg' );

        if( !in_array( $fileExt, $extensiones ) ){
            $errores_array[] = 'Extensiones de archivo no permitidas';
        }

        if( $fileSize > 1024*1000*2 ){
            $errores_array[] = 'El archivo excede el tamaño permitido ';
        }

        if ( file_exists('assets/img/photos/' . $fileName ) ) {
            $errores_array[] = 'El archivo ya existe ';
        }

        if( empty( $errores_array ) ){
            copy($_FILES['foto']['tmp_name'], 'assets/img/photos/' . $nombre . '.png');
        }

        
    }else{
        print_r($errores_array  );
        echo 'Error al cargar el archivo';
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

                    <form  enctype="multipart/form-data" action="index.php" method="POST" >
                
                        <label for="foto">Subir foto</label>
                        <input type="file" name="foto"  id="foto"  >

                        <input type="submit" value="Enviar">
                
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