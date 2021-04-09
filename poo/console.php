<?php 

    //accede a la direcion de los archivos de mysql
    //accede a algun usario con mysql -u usuario
    //escribe contraseña


    echo 'Muestra las bases de datos con SHOW DATABASE';
    echo 'Muestra las bases de datos con CREATE DATABASE nombre';
    echo 'accede a la base de datos use nombre';
    echo 'Para crear una tabla CREATE TABLE usuarios( id INT AUTO_INCREMENT, nombre VARCHAR(100) NOT NULL, email VARCHAR(100)NOT NULL, PRIMARY KEY(id)  );';
    echo 'Muesta las tablas creadas SHOW TABLES';
    echo 'Muestra las columnas de una tabla DESCRIBE nombre';
    echo "Inserta valores en una tabla INSERT INTO usuarios values(null, 'Mutuelo', 'test@dom.com');";
    echo 'Muestra los valores insertados en una tabla  SELECT * FROM usuarios;';
    echo "Insertar algunos datos INSERT INTO usuarios (id, nombre  ) values( id, 'Ramo2313'  );";

?>