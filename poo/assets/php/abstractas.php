<?php 

// Protege a la clase para que se solo se pueda acceder a ella al ser heredada
abstract class Usuario {
    public function saludar(){
        return 'Hola';
    }
}


class Saludar extends Usuario{

}

$user = new Saludar;
echo $user->saludar();



//static
class Elemento {
    public static $fecha = '01 de noviembre ';

    public static function saludar()
    {
        return 'Hola';
    }
}


echo Elemento::$fecha;
echo Elemento::saludar();




//cadenas

class Cadenas{
    public $nombre;
    public $correo;

    public function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarNombre(){
        echo $this->nombre;
        return $this;
    }

    public function mostrarCorreo()
    {
        echo $this->correo;
        return $this;
    }

}


$cadena1 = new Cadenas( 'cadena', 'cadena.com' );


echo $cadena1->mostrarNombre()->mostrarCorreo();

?>