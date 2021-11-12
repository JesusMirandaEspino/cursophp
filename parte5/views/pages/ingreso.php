<div class="col-full-12">
    <h1>Ingreso</h1>
</div>


<div class="d-flex">

    <form class="bg-light" method="post">


        <div class="mb-3">
            <label for="email" class="form-label">Correo Electronico</label>
            <div class="input-group">
                <div class="input-group-pretend">
                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                </div>
                <input type="email" class="form-control" id="email" aria-describedby="email" name="ingresoEmail">
            </div>
        </div>

        <div class="mb-3">
            <label for="pwd" class="form-label">Password</label>
            <div class="input-group">
                <div class="input-group-pretend">
                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                </div>
                <input type="password" class="form-control" id="pwd" aria-describedby="pwd" name="ingresoPwd">
            </div>
        </div>

        <?php

        /* Metodo instaciado 
        $registro = new ControladorFormularios();
        $registro->ControlRegistro();
*/


        /*Metodo estatico*/

        $ingreso = new  ControladorFormularios();

        $ingreso -> ControlIngreso();



        ?>

        <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>



</div>