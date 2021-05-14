<?php


/*   if( file_exists('documento.txt') ){
        echo  'El archivo si existe';
    }else{
        echo  'El archivo no existe';
    }
*/

// file_put_contents('documento.txt', 'Hola jesus', FILE_APPEND );




    for( $i = 0; $i <= 10; $i++ ){
        file_put_contents('documento.txt', "$i " , FILE_APPEND);  
    }


// echo file_get_contents('documento.txt');


$archivo = file( 'documento.txt' );
    echo '<pre>';
    print_r($archivo);

?>