<?php


/*************************************
                POO
**************************************/

//  Codigo imperativo o espagueti

$automovil1 = (object)['marca'=>'toyota', 'modelo'=>'corolla'];
$automovil2 = (object)['marca' => 'hyundai', 'modelo' => 'Accent Vision'];



function mostrar( $automovil ){
    echo "<p> hola soy un automovil marca: $automovil->marca , con el modelo $automovil->modelo </p>";
}

mostrar($automovil1);


// Clase
Class Auto {

    #Propiedades
    public $marca;
    public $modelo;

    #Metodo
    public function mostrar(){
        echo "Hola soy un $this->marca , del modelo $this->modelo";
    }

}


// Objeto

$a = new Auto();

$a -> marca = 'hyundai';
$a -> modelo = 'Accent Vision';

$a->mostrar();

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
    <title>My SQL Connect</title>


</head>

<body>


    <!-- **************************  -->
    <!-- **************************  -->
    <header>



        <section class="fila">

            <div class="contenedor1">

                <div class="col-full-12" id="salida">


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