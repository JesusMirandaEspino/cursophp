<?php

/*

    echo pathinfo( 'contador.txt', PATHINFO_BASENAME );

    echo pathinfo('carpeta/contador.txt', PATHINFO_DIRNAME);

    echo pathinfo('carpeta/contador.txt', PATHINFO_EXTENSION);

    echo pathinfo('contador.txt', PATHINFO_FILENAME);
    


    $res = glob( '*.{php, jpeg, png, txt }', GLOB_BRACE );

    print_r($res);
*/

echo basename('carpeta/contador.txt' );

echo dirname('carpeta/contador.txt' );

?>