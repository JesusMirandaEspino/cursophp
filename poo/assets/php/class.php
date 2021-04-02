<?php 
class Persona {

    public $nombre;
    public $edad;
    public $pais;


    public function mostrarInformacion(){
        echo 'Hola mundo';
    }

}



$usuario1  = new Persona;
$usuario1->$nombre = 'Mutuelo';
$usuario1->$edad = 25000;
$usuario1->$pais = 'lightstorm';
$usuario1->mostrarInformacion();

$usuario2  = new Persona;
$usuario2->$nombre = 'Maxking';
$usuario2->$edad = 35000;
$usuario2->$pais = 'darkvillage';
$usuario2->mostrarInformacion();

?>