<?php 
class Personaje {

    public $nombre;
    public $edad;
    public $pais;

    //solo se puede acceder dentro de la clase
    protected $contrasena;


    //nose puede heredar
    private $id;

    public function __construct($nombre, $edad, $pais, $id ){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
        $this->id = $id;
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