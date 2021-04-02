<?php 
class Personaje {

    public $nombre;
    public $edad;
    public $pais;

    public function __construct($nombre, $edad, $pais ){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function mostrarInformacion(){
        return $this->nombre;
    }

}

class Estudiante extends Personaje {

    public function __construct( $nombre, $edad, $pais,  $profesion)
    {
        parent::__construct($nombre, $edad, $pais);
        $this->profesion = $profesion;
    }

}



echo '<br/>';

$usuario1  = new Estudiante('Mutuelo', 25000, 'lightstorm', 'Mago');
echo  $usuario1->mostrarInformacion();

?>