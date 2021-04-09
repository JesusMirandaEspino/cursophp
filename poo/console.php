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
    echo "Modificar un valor almacenado donde se iguala con where para cambiarlo UPDATE usuarios SET nombre = 'SuperRamo' wHERE id = 2;";
    echo 'Selecciona los valores especificos en una tabla SELECT nombre FROM usuarios;';
    echo "Seleciona un valor en especifico SELECT nombre FROM usuarios WHERE nombre = 'Mutuelo';";
    echo "Selecciona un valor donde  y comience con la letra antes de  SELECT * FROM usuarios WHERE nombre LIKE 'm%';";
    echo "Selecciona un valor donde  y termine con la letra despues  de  SELECT * FROM usuarios WHERE nombre LIKE '%o';";
    echo 'Seleciona valores y los ordena de manera ascendente  SELECT * FROM usuarios ORDER BY nombre ASC;';
    echo 'Seleciona valores y los ordena de manera descendente  SELECT * FROM usuarios ORDER BY nombre DESC;';
    echo 'Selecciona los valores con un limite a mostrar SELECT * FROM usuarios LIMIT 1;';
    echo 'Selecciona los valores con un limite inicial y final  a mostrar SELECT * FROM usuarios LIMIT 0, 2;';
    echo 'Selecciona los valores con un limite inicial y final  a mostrar SELECT * FROM usuarios LIMIT 0, 2;';

?>  