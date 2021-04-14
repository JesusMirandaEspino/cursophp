<?php 
class Persona {

    public $nombre;
    public $edad;
    public $pais;

    public function __construct($nombre, $edad, $pais ){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
        
    }

    public function mostrarInformacion(){
        echo $this->nombre;
    }

}

$usuario1  = new Persona('Mutuelo', 25000, 'lightstorm' );
$usuario1->mostrarInformacion();

$usuario2  = new Persona( 'Maxking', 35000, 'darkvillage' );
$usuario2->mostrarInformacion();

?>